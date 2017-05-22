<?php

namespace App\Http\Controllers\Admin\Evaluacion; 

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mod_2\Evaluacion\Cuestionario;
use App\Mod_2\Evaluacion\Categoria;
use App\Mod_2\Evaluacion\Pregunta;
use App\Mod_2\Evaluacion\Opcion;

class PreguntaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::paginate()->sortBy('id');
        return view('evaluacion/pregunta/list', ['preguntas' => $preguntas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias    = Categoria::all();
        $cuestionarios = Cuestionario::all();
        $pregunta      = NULL;
        return view('evaluacion/pregunta/form', compact('pregunta', 'categorias', 'cuestionarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'categoria_id'    => 'required',
            'cuestionario_id' => 'required',
            'enunciado'       => 'required',
        ]);

        $id              = $request->input('id');
        $categoria_id    = $request->input('categoria_id'); 
        $cuestionario_id = $request->input('cuestionario_id'); 
        $enunciado       = trim($request->input('enunciado')); 
        $dataOpciones    = !empty($request->input('opciones')) ? $request->input('opciones') : array(); 
        $oldOpciones     = array();
        $upOpciones      = array();
        if ($id) {
            $pregunta    = Pregunta::find($id);
            $oldOpciones = $pregunta->opciones;
        } else {
            $pregunta = new Pregunta();
        }

        $pregunta->categoria_id    = $categoria_id;
        $pregunta->cuestionario_id = $cuestionario_id;
        $pregunta->enunciado       = $enunciado;
        $pregunta->save();

        // logica para almacenar las opciones asociadas a la pregunta
        $correcta = NULL;
        $opciones = array();
        if (isset($dataOpciones['es_correcta'])) {
            $correcta = $dataOpciones['es_correcta'];
            unset($dataOpciones['es_correcta']);
        }

        foreach ($dataOpciones as $key => $dataOpcion) {
            if (isset($dataOpcion['opcion']) && !empty($dataOpcion['opcion'])){
                if (isset($dataOpcion['id'])) {
                    $opcion       = Opcion::find($dataOpcion['id']);
                    $upOpciones[] = $dataOpcion['id'];
                } else {
                    $opcion = new Opcion();
                }
                $opcion->valor       = $dataOpcion['valor'];
                $opcion->opcion      = $dataOpcion['opcion'];
                $opcion->es_correcta = ($key == $correcta) ? 1:0;
                $opciones[]          = $opcion;
            }
        }
        $pregunta->opciones()->saveMany($opciones);

        // Elimina elementos que no llegaron en la peticion
        foreach ($oldOpciones as $oldOpcion) {
            if (!in_array($oldOpcion->id, $upOpciones)) {
                $oldOpcion->delete();
            }
        }
        return redirect()->route('admin.preguntas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta      = Pregunta::find($id);
        $categorias    = Categoria::all();
        $cuestionarios = Cuestionario::all();
        return view('evaluacion/pregunta/form', compact('pregunta', 'categorias', 'cuestionarios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        try {
            $pregunta = Pregunta::where('id', $id)->with('opciones')->first(); 
            foreach ($pregunta->opciones as $opcion) {
                $opcion->delete();
            }
            $pregunta->delete();
        } catch(QueryException $e) {}
        return redirect()->route('admin.preguntas.index');
    }

}

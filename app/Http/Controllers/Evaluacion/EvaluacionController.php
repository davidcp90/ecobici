<?php

namespace App\Http\Controllers\Evaluacion; 

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mod_2\Evaluacion\Evaluacion;
use App\Mod_2\Evaluacion\Cuestionario;
use App\Mod_2\Evaluacion\Pregunta;
use App\Mod_2\Evaluacion\Respuesta;
use App\Mod_2\Evaluacion\Categoria;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($user = $request->user()) {
            $states = array('activo', 'aprobado', '');
          if ( !in_array($user->usuario_aprobado, $states)) {
              $evaluaciones  = Evaluacion::where('user_id', $user->id)->with('cuestionario')->get();
              foreach ($evaluaciones as &$evaluacion) {
                  $this::getEstadoEvaluacion($evaluacion, $user);
              }
              return view('evaluacion/evaluacion/evaluaciones', ['evaluaciones' => $evaluaciones]);
                
          } else {
            return view('evaluacion/evaluacion/aprobado');
          }
        } else {
            return  redirect('/login'); 
        }
    }

    protected function getEstadoEvaluacion(&$evaluacion, &$user){
        $preguntas  = $evaluacion->cuestionario->preguntas;
        $respuestas = $evaluacion->respuestas;
        $puntaje     = 0;
        $arrPregun  = array();
        foreach ($preguntas as $pregunta) {
            $arrPregun[$pregunta->id] = $pregunta;
        }
        foreach ($respuestas as $respuesta) {
            if ($respuesta->opcion->es_correcta) {
                $puntaje++;
            }
            $idPregunta = $respuesta->opcion->pregunta->id;
            if (isset($arrPregun[$idPregunta])){
                unset($arrPregun[$idPregunta]);
            }
        }
        $evaluacion->puntaje = $puntaje;
        if (!empty($arrPregun)) {
            $evaluacion->estado = 0; // estado 0 evaluacion sin terminar
        } else {
            if ($puntaje >= $evaluacion->cuestionario->puntaje) {
                $evaluacion->estado = 1; // estado 1 Aprobado
                //@todo Hacer envio de datos a la interfaz del modulo de usuarios
                $user->usuario_aprobado = 'aprobado';
                $user->save();
            } else {
                $evaluacion->estado = 2; // estado 2 Reprobado
            }
        }
    }

    public function getCuestionarios(){
        $cuestionarios = Cuestionario::all();
        return view('evaluacion/evaluacion/cuestionarios', ['cuestionarios' => $cuestionarios]);
    }

    public function createEvaluacion(Request $request, $idCuestionario){
        if ($idCuestionario && $user = $request->user()) {
            $evaluacion = new Evaluacion();
            $evaluacion->user_id         = $user->id;
            $evaluacion->cuestionario_id = $idCuestionario;
            $evaluacion->save();
            return redirect('/evaluacion');
        }
    }


    public function getCategorias(Request $request, $idEvaluacion)
    {
        
            $evaluacion = Evaluacion::find($idEvaluacion);
            $categorias = $this->getCategoriasCuestionario($evaluacion->cuestionario->id);
            $message    = null;
            $data = ['evaluacion'=>$evaluacion, 'categorias' => $categorias, 'message' => null];
            return view('evaluacion/evaluacion/categorias', $data);

    }
    protected function getCategoriasCuestionario($idCuestionario){
        $preguntas  = Cuestionario::find($idCuestionario)->preguntas()->with('categoria')->orderBy('id')->get();
        $categorias = array();
        foreach ($preguntas as $pregunta) {
            if (!array_key_exists($pregunta->categoria->id, $categorias)) {
                $categorias[$pregunta->categoria->id] = $pregunta->categoria;
            }
        }
        return $categorias;
    }
    public function nextPregunta(Request $request, $idEvaluacion, $idCategoria)
    {
        $preguntas    = Pregunta::where('categoria_id', $idCategoria)->orderBy('id')->with('opciones')->get();
        $respuestas   = Respuesta::where('evaluacion_id', $idEvaluacion)->orderBy('id')->get();
        $nextPregunta = NULL;
        $resOpciones  = array(); 
        foreach ($respuestas as $respuesta) {
            $resOpciones[] = $respuesta->opcion->id;
        }
        foreach ($preguntas as $pregunta) {
            $hayRespuesta = false;
            foreach ($pregunta->opciones as $opcion) {
                if (in_array($opcion->id, $resOpciones)) {
                    $hayRespuesta = true;
                }
            }
            if (!$hayRespuesta) {
                $nextPregunta = $pregunta;
                break;
            }    
        }
        if ($nextPregunta) {
            return view('evaluacion/evaluacion/pregunta', ['pregunta' => $nextPregunta, 'idEvaluacion' => $idEvaluacion, 'idCategoria' => $idCategoria]);    
        } else {
            $evaluacion = Evaluacion::find($idEvaluacion);
            $categorias = $this->getCategoriasCuestionario($evaluacion->cuestionario_id);
            $categoria  = Categoria::find($idCategoria);
            $message    = 'Ya has terminado con la categoría: '.$categoria->nombre;

            $data = ['evaluacion'=>$evaluacion, 'categorias' => $categorias, 'message' => $message];
            return view('evaluacion/evaluacion/categorias', $data);
        }
    }
    public function setRespuesta(Request $request){
        $this->validate($request, [
            'idEvaluacion' => 'required',
            'idCategoria'  => 'required',
            'opcion'       => 'required',
        ]);
        $idEvaluacion = $request->input('idEvaluacion');
        $idCategoria  = $request->input('idCategoria');
        $idOpcion     = $request->input('opcion');

        $respuesta = Respuesta::where('opcion_id', $idOpcion)->where('evaluacion_id', $idEvaluacion)->first();
        if (!$respuesta) {
            $respuesta = new Respuesta();
            $respuesta->opcion_id = $idOpcion;
            $respuesta->evaluacion_id = $idEvaluacion;
            $respuesta->save();
            return redirect("/evaluacion/$idEvaluacion/categoria/$idCategoria/pregunta");
        }
    }
}

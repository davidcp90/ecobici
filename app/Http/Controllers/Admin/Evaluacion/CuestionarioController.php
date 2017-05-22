<?php

namespace App\Http\Controllers\Admin\Evaluacion; 

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mod_2\Evaluacion\Cuestionario;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuestionario = Cuestionario::paginate()->sortBy('id');
        return view('evaluacion/cuestionario/list', ['cuestionarios' => $cuestionario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluacion/cuestionario/form');
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
            'nombre' => 'required',
            'puntaje' => 'required|integer'
        ]);

        $id      = $request->input('id');
        $nombre  = $request->input('nombre'); 
        $puntaje = $request->input('puntaje'); 

        if ($id) {
            $cuestionario = Cuestionario::find($id);
        } else {
            $cuestionario = new Cuestionario();
        }

        $cuestionario->nombre  = $nombre;
        $cuestionario->puntaje = $puntaje;
        $cuestionario->save();

        return  redirect()->route('admin.cuestionarios.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuestionario = Cuestionario::find($id);
        return view('evaluacion/cuestionario/form', ['cuestionario' => $cuestionario]);
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
            $cuestionario = Cuestionario::find($id);    
            $cuestionario->delete();
        } catch(QueryException $e) {}
        return redirect()->route('admin.cuestionarios.index');
    }

}

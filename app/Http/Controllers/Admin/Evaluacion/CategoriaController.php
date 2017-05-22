<?php

namespace App\Http\Controllers\Admin\Evaluacion; 

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mod_2\Evaluacion\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate()->sortBy('id');
        return view('evaluacion/categoria/list', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluacion/categoria/form', ['categoria' => NULL]);
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
        ]);

        $id     = $request->input('id');
        $nombre = $request->input('nombre'); 

        if ($id) {
            $categoria = Categoria::find($id);
        } else {
            $categoria = new Categoria();
        }

        $categoria->nombre = $nombre;
        $categoria->save();

        return  redirect()->route('admin.categorias.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('evaluacion/categoria/form', ['categoria' => $categoria]);
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
            $categoria = Categoria::find($id);    
            $categoria->delete();
        } catch(QueryException $e) {}
        return redirect()->route('admin.categorias.index');
    }


}

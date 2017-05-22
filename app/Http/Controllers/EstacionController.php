<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estacion;
use DB;

class EstacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estaciones = \DB::table('estacion');
        if ($request->all() == null)
        {
            return response()->json(['result'=>Estacion::all(), 'error_code'=>0, 'error_message'=>'']);
        } elseif ($request->input('activas') != null && $request->input('inactivas') != null && $request->input('menoscinco') != null && $request->input('mascinco') != null) 
        {
            $estaciones = \DB::table('estacion');
            if($request->input('activas') == 1 && $request->input('inactivas') == 1){
                $estaciones->whereIn('estado', [1, 2]);
            }elseif($request->input('activas') ==1 && $request->input('inactivas') == 0){
                $estaciones->where('estado', 1);
            }elseif($request->input('activas') ==0 && $request->input('inactivas') == 1){
                $estaciones->where('estado', 2);
            }else{
                $estaciones->whereNotIn('estado', [1, 2]);
            }

            if($request->input('menosCinco') == 1 AND $request->input('masCinco') == 0){
                $estaciones->where('numero_ciclas', '<=', 5);
            }elseif($request->input('menosCinco') == 0 AND $request->input('masCinco') == 1){
                $estaciones->where('numero_ciclas', '>', 5);
            }
        }

        return response()->json(['result'=>$estaciones->get(), 'error_code'=>0, 'error_message'=>'']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PrestamoT;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Estacion;
use App\HistoricoPagos;
use DateTime;
class UsuariosController extends Controller {

	public function getIndex() {
		$prestamos = PrestamoT::orderBy('created_at','DESC')->paginate(1);
		return view('users_module/main', compact('prestamos'));
	}


	public function histoviajes()
	{
		$prestamos = PrestamoT::orderBy('created_at','DESC')->paginate();
		$estaciones = Estacion::paginate();
		return view('users_dashboard/dash_historial_recorridos', compact('prestamos'),compact('estaciones'));
	}

	public function histopagos()
	{
		$histopagos = HistoricoPagos::paginate();
		
		return view('users_dashboard/dash_historial_pagos', compact('histopagos'));
	}

	public function pagospendientes()
	{
		$pagospendientes = HistoricoPagos::paginate();	
		return view('users_dashboard/dash_pagos_pendientes', compact('pagospendientes'));
	}
		public function mapa()
	{
		$estaciones = Estacion::paginate();		
		return view('users_dashboard/dash_rutas',compact('estaciones'));
	}
	public function quejas()
	{	
		return view('users_dashboard/dash_suport');
	}

	public function queja(){
		return view('users_dashboard/dash_queja');
	}
	public function postQueja(Request $request){
       \DB::table('quejas')->insert(array (
		'name' => $request->input('name'),
		'email' => $request->input('email'),
		'mensaje' => $request->input('mensaje'),
		'tipo' => 'Queja',   
		 'created_at' => new DateTime,
         'updated_at' => new DateTime,
      	));

		return view('users_dashboard/dash_suport');
	}

	public function sujerencia(){
		return view('users_dashboard/dash_sujerencia');
	}
	public function postsujerencia(Request $request){
       \DB::table('quejas')->insert(array (
		'name' => $request->input('name'),
		'email' => $request->input('email'),
		'mensaje' => $request->input('mensaje'),
		'tipo' => 'sujerencia',   
		 'created_at' => new DateTime,
         'updated_at' => new DateTime,
      	));

		return view('users_dashboard/dash_suport');
	}

	public function soporte(){
		return view('users_dashboard/dash_soporte');
	}
	public function postsoporte(Request $request){
       \DB::table('quejas')->insert(array (
		'name' => $request->input('name'),
		'email' => $request->input('email'),
		'mensaje' => $request->input('mensaje'),
		'tipo' => 'soporte',   
		 'created_at' => new DateTime,
         'updated_at' => new DateTime,
      	));

		return view('users_dashboard/dash_suport');
	}
}

/*
['as' => 'dashboard', function () {
        return view();
    }]);*/
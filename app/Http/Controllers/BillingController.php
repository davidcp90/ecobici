<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\HistoricoPagos;
use Illuminate\Http\Request;

class BillingController extends Controller {

	public function getIndex() {
		$result = \DB::table('historico_pagos')
		->select(['user_id', 'confirmacion_pago'])
		->get();
		dd($result);
	}
	public function getConfirmar($id){
		$user = User::findOrFail($id);
		return view('users_module.confirmar_pago', compact('user'));
	}
	public function postGuardar(Request $request){
		try{
		$input_data=[
		'user_id' => $request->input('user'),
		'confirmacion_pago' => $request->input('confirmacion_pago'),
		];
		$pago=HistoricoPagos::create($input_data);
		//User::create();
		//$created_user->attachRole(3);
		return view('users_module.confirmar_creacion',['success' => true]);
	}
	catch(Exception $e){
		return view('users_module.confirmar_creacion',['errors' => $e]);
	}
	}
}

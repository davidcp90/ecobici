<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class Usuario2Controller extends Controller {

	public function getIndex() {
		$result = \DB::table('users')
		->select(['name', 'email'])
		->get();
		dd($result);
	}
	public function postCliente(Request $request){
		$password=$request->input('password');
		$input_data=[
		'name' => $request->input('name'),
		'email' => $request->input('email'),
		'password' => bcrypt($request->input('password')),
		'cedula' => $request->input('cedula'),
		'telefono_fijo' => $request->input('telefono_fijo'),
		'celular' => $request->input('celular'),
		'direccion' => $request->input('direccion'),
		'usuario_aprobado' => $request->input('usuario_aprobado')
		];
		$created_user=User::create($input_data);
		//User::create();
		//$created_user->attachRole(3);
		return view('users_module.pago_suscripcion',['user' => $created_user, 'password' => $password]);
	}
	public function postEditarCliente(Request $request){
		try{
			$u_id=$request->input('user_id');
			$user = User::find((int)$u_id);
			if($request->input('name')){
				$user->name = $request->input('name');
			}
			if($request->input('email')){
				$user->email = $request->input('email');
			}
			if($request->input('cedula')){
				$user->cedula = $request->input('cedula');
			}
			if($request->input('telefono_fijo')){
				$user->telefono_fijo = $request->input('telefono_fijo');
			}
			if($request->input('celular')){
				$user->celular = $request->input('celular');
			}
			if($request->input('direccion')){
				$user->direccion = $request->input('direccion');
			}
			$user->save();
			return view('users_module.main', ['user' => $user,'success' => true]);
		}
		catch(Exception $e){
			$u_id=$request->input('user_id');
			$user = User::find((int)$u_id);
			$errors='ocurrio el siguiente error'+$e;
			return view('users_module.editar2', ['user' => $user,'errors' => $errors]);
		}
	}
}
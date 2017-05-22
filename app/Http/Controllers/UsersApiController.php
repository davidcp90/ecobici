<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class UsersApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario = null;
        $password = \DB::table('users');
        if ($request->input('usuario') != null && $request->input('clave') != null) {
            $password->where('email', $request->input('usuario'));
            if($password != null) {
                if (\Hash::check($request->input('clave'), $password->value('password'))) {
                    $usuario = \DB::table('users');
                    $usuario = $usuario->where('email', $request->input('usuario'))->get();

                    $users=null;
                    for ($i = 0, $c = count($usuario); $i < $c; ++$i) {
                        $users[$i] = (array) $usuario[$i];
                    }

                    $usu[] = array(
                        'id' => $users[0]['id'],
                        'nombre' => $users[0]['name'],
                        'usuario' => $users[0]['email'],
                        'password' => $users[0]['password'],
                        'foto' => './assets/img/foto-movil.jpg',
                        'telefono' => $users[0]['telefono_fijo'],
                        'direccion' => $users[0]['direccion'],
                        'ultima_factura_cancelada' => '2015-09-02',
                        'ultimo_login' => '2015-09-02',   
                        'valor_proxima_factura' => '45500.00',
                        'fecha_proxima_factura' => '2015-11-01',
                        'estado_id' => '1',
                        );

                }
            }
        }
        if ($usuario != null) {
            return response()->json(['result'=>$usu, 'error_code'=>0, 'error_message'=>'']);
        }
        return response()->json(['result'=>'', 'error_code'=>'E01', 'error_message'=>'Datos no validos']);
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
    public function edit(Request $request, $id)
    {
        $usuario = \DB::table('users')->where('id', $id)->get();
        if ($usuario != null) {
            $usuario2 = \DB::table('users')->where('email', $request->input('email'))->first();
            if ($usuario2 == null) {
                $usuario = \DB::table('users')->where('id', $id)->update(['email' => $request->input('email'), 'telefono_fijo' => $request->input('phone')]);
                return response()->json(['result'=>'OK:200', 'error_code'=>'0', 'error_message'=>'']);
            } else {
                $usuario2 = $usuario2->id;
                if ($usuario2 == $id) {
                    $usuario = \DB::table('users')->where('id', $id)->update(['telefono_fijo' => $request->input('phone')]);
                    return response()->json(['result'=>'OK:200', 'error_code'=>'0', 'error_message'=>'']);
                }
                return response()->json(['result'=>'', 'error_code'=>'E01', 'error_message'=>'Correo ya existe']);
            }
        }
        return response()->json(['result'=>'', 'error_code'=>'E01', 'error_message'=>'Datos no validos']);
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
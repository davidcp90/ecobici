<?php
/* Ojo pasar todas las vistas a través de su controlador correspondiente así:
Route::get('home', 'homeController@index');
Hay que hacer los controllers para todas las vistas
FRESCO era solo mientras hacia el front
*/
use Illuminate\Http\Request;

// User authenticate routes

Route::get('/home', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@getLogin']);
Route::get('/', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']); 

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'middleware' => ['role:Admin']], function() {
    Route::get('/user/billing/{id}', ['uses' =>'Admin\UsuarioController@billing', 'as'=>'editar-billing']);
    Route::post('/user/billing/store', ['uses' =>'Admin\UsuarioController@billing_store', 'as'=>'store-billing']);
    //Route::post('/user/billing/store/confirm/{data}', ['uses' =>'Admin\UsuarioController@confirm_billing', 'as'=>'confirm-billing']);
    Route::resource('users', 'Admin\UsuarioController');
    Route::post('/crear_cliente', ['uses' =>'UserController@postCliente', 'as'=>'crear-cliente']);
    Route::post('/editar_cliente', ['uses' =>'UserController@postEditarCliente', 'as'=>'editar-cliente']);

    // rutas para administracion de  evaluaciones 
    Route::resource('/categorias', 'Admin\Evaluacion\CategoriaController', ['except' => ['show', 'update']]);
    Route::resource('/cuestionarios', 'Admin\Evaluacion\CuestionarioController', ['except' => ['show', 'update']]);
    Route::resource('/preguntas', 'Admin\Evaluacion\PreguntaController', ['except' => ['show', 'update']]);

    Route::get('/admin/users', ['middleware' => ['permission:manage-users'], 'uses' => 'UsuarioController@mindex']);
    Route::get('/registro', ['as' => 'registro', function () {
    return view('users_module/registro');
    }]);
    Route::get('/editar-usuario', ['as' => 'editar-usuario', function () {
        return view('users_module/editar');
    }]);
    Route::get('/lista-registros', ['as' => 'lista-registros', function () {
        return view('users_module/lista_registro');
    }]);
    Route::get('/vcard', ['as' => 'vcard', function () {
        return view('users_module/vcard');
    }]);
});

// Es necesario verificar el nivel de acceso para las rutas de estos servicios
// Todas estan expuestas, deberían agregarsele control de usuarios. 
Route::group(['prefix' => 'api/v1'], function() {
    Route::resource('estaciones','EstacionController');
    Route::resource('users','UsersApiController');
});

Route::model('pregunta', 'App\Mod_2\Curso\Pregunta');
Route::model('curso', 'App\Mod_2\Curso\Curso');
Route::model('cuestionario', 'App\Mod_2\Curso\Cuestionario');
Route::get('/pagos/confirmar/{id}', ['uses' =>'BillingController@getConfirmar', 'as'=>'confirmar-pago']);
Route::post('/pagos/guardar', ['uses' =>'BillingController@postGuardar', 'as'=>'guardar-pago']);

Route::group(['middleware' => ['role:User']], function () use($router) {
    // Rutas del Curso
    Route::get('curso', ['as'=>'curso.index', 'uses'=>'Curso\CursoController@index']);
    Route::get('curso/{curso}/ver', ['as'=>'curso.show', 'uses'=>'Curso\CursoController@show']);
    Route::get('curso/normatividad', ['as'=>'cursos.index', 'uses'=>'Curso\CursoController@normatividad']);
    Route::get('curso/reglamento', ['as'=>'cursos.index', 'uses'=>'Curso\CursoController@reglamento']);
    Route::get('curso/bicicleta', ['as'=>'cursos.index', 'uses'=>'Curso\CursoController@bicicleta']);
    Route::get('curso/habilidades', ['as'=>'cursos.index', 'uses'=>'Curso\CursoController@habilidades']);
    Route::get('curso/ecoestaciones', ['as'=>'cursos.index', 'uses'=>'Curso\CursoController@ecoestaciones']);
    Route::get('curso/cuestionario', ['as'=>'cuestionario.index', 'uses'=>'Curso\CuestionarioController@index']);
    Route::get('curso/cuestionario/{cuestionario}/pregunta/{pregunta}', ['as'=>'cuestionario', 'uses'=>'Curso\CuestionarioController@pregunta']); 
    Route::post('curso/cuestionario/{cuestionario}/pregunta/{pregunta}', ['as'=>'cuestionario.muestrear', 'uses'=>'Curso\CuestionarioController@muestrear']);
    Route::get('curso/resumen', ['as'=>'cuestionario.resumen', 'uses'=>'Curso\CuestionarioController@resumen']);  

    // rutas para la evaluacion 
    Route::get('/evaluacion', 'Evaluacion\EvaluacionController@index');
    Route::get('/evaluacion/cuestionario', 'Evaluacion\EvaluacionController@getCuestionarios');
    Route::get('/evaluacion/cuestionario/{id}/create', 'Evaluacion\EvaluacionController@createEvaluacion');
    Route::get('/evaluacion/evaluacion/{id}/categorias', 'Evaluacion\EvaluacionController@getCategorias');
    Route::get('/evaluacion/{idEvaluacion}/categoria/{idCategoria}/pregunta', 'Evaluacion\EvaluacionController@nextPregunta');
    Route::post('/evaluacion/respuesta', 'Evaluacion\EvaluacionController@setRespuesta');
    
    Route::get('logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']); 
    // Otras rutas sin controllers*

    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'UsuariosController@getIndex']); 
    Route::get('/historial/viajes', ['as' => 'histoviajes', 'uses' => 'UsuariosController@histoviajes']); 
    Route::get('/historial/pagos',['as' => 'histopagos', 'uses' => 'UsuariosController@histopagos']);
    Route::get('/mapa',['as' => 'rutas', 'uses' => 'UsuariosController@mapa']);
    Route::get('/pagos', ['as' => 'dash_pagos_pendientes','uses' => 'UsuariosController@pagospendientes']);
    Route::get('/suport', ['as' => 'dash_suport','uses' => 'UsuariosController@quejas']);

    /*Route::post('/queja', ['as' => 'que', function () {
        return view('users_dashboard/dash_queja');
    }]);
*/
    Route::get('/queja', ['uses' =>'UsuariosController@queja', 'as'=>'queja']);
    Route::post('/crear_queja', ['uses' =>'UsuariosController@postQueja', 'as'=>'crear-queja']);

    Route::get('/sujerencia', ['uses' =>'UsuariosController@sujerencia', 'as'=>'sujerencia']);
    Route::post('/crear_sujerencia', ['uses' =>'UsuariosController@postsujerencia', 'as'=>'crear-sujerencia']);

    Route::get('/soporte', ['uses' =>'UsuariosController@soporte', 'as'=>'soporte']);
    Route::post('/crear_soporte', ['uses' =>'UsuariosController@postsoporte', 'as'=>'crear-soporte']);

    Route::get('/pago-suscripcion', ['as' => 'pago-suscripcion', function () {
        return view('users_module/pago_suscripcion');
    }]);
    Route::get('/planes', ['as' => 'planes', function () {
        return view('users_module/planes');
    }]);

   

   

    Route::get('/user/cuenta', ['as' => 'dash_cuenta', function () {
        return view('users_dashboard/dash_cuenta');
    }]);

    Route::get('/user/changepass', ['as' => 'dash_resetpass', function () {
        return view('users_dashboard/dash_resetpass');
    }]);
    Route::get('/editar-usuario', ['as' => 'edit', function () {
        return view('users_module/editar2');
    }]);
    Route::post('/editar_cliente2', ['uses' =>'Admin\Usuario2Controller@postEditarCliente', 'as'=>'editar-cliente2']);

});




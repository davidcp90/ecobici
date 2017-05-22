<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use DB;
use View;
use DateTime;
use App\Http\Controllers\Controller;
use App\Http\Requests\CrearUsuarioRequest;
use App\Http\Requests\EditarUsuarioRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::orderBy('id')->paginate(70);
		return view('users_module.lista_registro', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		return view('users_module.registro');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CrearUsuarioRequest $request)
	{
		$user = new User($request->all());
		$user->save();

		return redirect()->route('admin.users.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('users_module.editar', compact('user'));
	}
	public function billing($id)
	{
		$periods = DB::table('payment_periods')->get();
		$payment_types = DB::table('payment_type')->get();
		$user = User::findOrFail($id);
		return view('users_module.editar_billing', ['user' => $user, 'periods' => $periods, 'payment_types' => $payment_types]);
	}

	public function billing_store(Request $request)
	{
		$id=$request->input('user');
		$periods = DB::table('payment_periods')->get();
		$payment_types = DB::table('payment_type')->get();
		$user = User::findOrFail($id);
		$type = $request->input('payment_type');
		$ref = $request->input('reference');
		$period = $request->input('payment_period');
		if($type && $period){
			if($ref){
				$obj_type= DB::table('payment_type')->where('id',$type);
				$obj_period= DB::table('payment_period')->where('id',$period);
				$min=$obj_type->value('minimum_length');
				$max=$obj_type->value('max_length');
				$first=$obj_type->value('starts_with');
				$ref_length=strlen($ref);
				if($ref_length >= $min && $ref_length <= $max){
					if($first){
						if($ref[0]==$first){
							DB::table('user_billingdata')->insert([
    							'user_id' => $id,
    							'payment_type_id' => $type,
    							'payment_periods_id' => $period,
    							'reference' => $ref,
    							'created_at' => new DateTime,
            					'updated_at' => new DateTime,
    							]);
							$success= 'El registro se creó con éxito';
							$data=['user' => $user, 'periods' => $periods, 'payment_types' => $payment_types,'success'=>$success];
						}
						else{
							$errors= 'la referencia para el medio de pago debe empezar por '.$first;
							$data=['user' => $user, 'periods' => $periods, 'payment_types' => $payment_types,'errors'=>$errors];
						}
					}
					else{
							DB::table('user_billingdata')->insert([
    							'user_id' => $id,
    							'payment_type_id' => $type,
    							'payment_periods_id' => $period,
    							'reference' => $ref,
    							'created_at' => new DateTime,
            					'updated_at' => new DateTime,
    							]);
							$success= 'El registro se creó con éxito';
							$data=['user' => $user, 'periods' => $periods, 'payment_types' => $payment_types,'success'=>$success];
					}
				}
				else{
					$errors= 'la referencia debe tener minimo '.$min.' y maximo '.$max;
					$data=['user' => $user, 'periods' => $periods, 'payment_types' => $payment_types,'errors'=>$errors];
				}
			}
			else{
				$errors= 'No ingreso una referencia';
				$data=['user' => $user, 'periods' => $periods, 'payment_types' => $payment_types,'errors'=>$errors];
			}
				}
		else{
			$errors= 'Verifique haber seleccionado medio de pago y periodo';
			$data=['user' => $user, 'periods' => $periods, 'payment_types' => $payment_types,'errors'=>$errors];
		}
		return view('users_module.confirmar_creacion', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditarUsuarioRequest $request, $id)
	{
		$user = User::findOrFail($id);
		$user->fill($request->all());
		$user->save();

		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);    
		$user->delete();
		return redirect()->route('admin.users.index');
	}

}

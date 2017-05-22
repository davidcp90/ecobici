<?php

    namespace App\Http\Controllers\Curso;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Requests\Curso\CuestionarioRequest;
    use App\Http\Controllers\Controller;
    use App\Mod_2\Curso\Pregunta;
    use App\Mod_2\Curso\Cuestionario;
    use App\Services\AppService;

    class CuestionarioController extends Controller
    {
    	/**
    	 * Muestra los cuestionarios disponibles en el sistema
    	 * @return Response
    	 */
    	public function index( Request $request ) { 		
    		// Seteando al sistema para que vaya a la primera pregunta.            
            $request->session()->put('correctas', 0);
            $request->session()->put('incorrectas', 0);
            $request->session()->put('pregunta', -1);

            // Seteando al sistema para que vaya a la primera pregunta.
            /* $pregunta = Pregunta::first();
            $request->session()->put('correctas', 0);
            $request->session()->put('incorrectas', 0);
            
            if( is_null($pregunta) ) return view('cuestionario_resumen', ['error'=>'No existen preguntas en el sistema. Contacte con el administrador']);

            $request->session()->put('pregunta', $pregunta->id);

            return redirect()->route('cuestionario', [$pregunta]);*/

            return view('curso/cuestionario_home', ['cuestionarios'=>Cuestionario::with('preguntas')->conPreguntas()->get()]);
    	}

        /**
         * Muestra una pregunta dado su ID.
         * @param App\Cuestionario   $cuestionario Cuestionario al que pertenece la pregunta
         * @param App\Pregunta $pregunta Pregunta a mostrar
         * @param  Request  $request  [description]
         * @return 
         */
        public function pregunta( Cuestionario $cuestionario, Request $request, Pregunta $pregunta )
        {        
            $actual = $request->session()->get('pregunta');   
            
            // Esto es que viene de la pantalla de cuestionarios
            if( $actual == -1 ) {
            	$actual = $primeraPregunta = $cuestionario->preguntas()->first()->id;
            }         

            if( $actual != $pregunta->id ) { 
            	$request->session()->put('pregunta', $actual); // Seteo que estas en la primera pregunta de ese cuestionario.
            	return redirect()->route('cuestionario', [ $cuestionario, Pregunta::find($actual) ]);  // Te redirecciono para la primera pregunta
            }

            return view('curso/cuestionario', ['pregunta'=>$pregunta]);
        }

        /**
         * Muestrea la respuesta de una pregunta
         * @param  App\Cuestionario    $cuestionario Cuestionario al que pertenece la pregunta
         * @param  App\Pregunta        $pregunta Pregunta que se muestrea
         * @param  CuestionarioRequest $request  Request
         * @return 
         */
        public function muestrear( Cuestionario $cuestionario, Pregunta $pregunta, CuestionarioRequest $request, AppService $service ) { 
        	$resultado = $service->validarRespuesta( $pregunta, $request->get('opcion'), \Auth::user() );

            $incorrectas = $request->session()->get('incorrectas');
            $correctas = $request->session()->get('correctas');

            if (!$resultado) $request->session()->put('incorrectas', ++$incorrectas);
            else $request->session()->put('correctas', ++$correctas);


            $proxima = $service->proximaPregunta( $cuestionario, $pregunta );

            // Si no hay proxima pregunta, entonces mostrar resumen.
            if( is_null($proxima) ) return redirect()->route('cuestionario.resumen');

            $request->session()->put('pregunta', $proxima->id);

            // Ir a la proxima pregunta por que existe otra . :)
            return redirect()->route('cuestionario', [$cuestionario, $proxima]);
        }

        /**
         * Muestra resumen del cuestionario
         * @return 
         */
        public function resumen( Request $request )  { 
        	$correctas = $request->session()->get('correctas');
        	$incorrectas= $request->session()->get('incorrectas');

        	// Reseteando ese dato.
        	$request->session()->put('correctas', 0);
        	$request->session()->put('incorrectas', 0);
            $user = $request->user();
            if ($correctas > 6 && $user) {
                $user->usuario_aprobado = 'aprobado';
                $user->save();
            }
            return view('curso/cuestionario_resumen', ['correctas'=>$correctas, 'incorrectas'=>$incorrectas]);
        }       
    }
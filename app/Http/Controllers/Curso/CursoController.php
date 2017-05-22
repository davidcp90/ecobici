<?php

    namespace App\Http\Controllers\Curso;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use App\Mod_2\Curso\Curso;

    class CursoController extends Controller
    {
        /**
         * Muestra el listdo de cursos disponibles
         *
         * @return \Illuminate\Http\Response
         */
        public function index(Request $request)
        {
            $user = $request->user() ;
            $states = array('activo', 'aprobado', '');
            if ( $user && !in_array($user->usuario_aprobado, $states)) {
            
                return view('curso/cursos', ['cursos'=>Curso::all()]);
            }
            return view('evaluacion/evaluacion/aprobado');
        }

        /**
         * Mustra un curso 
         * @param  Curso  $curso [description]
         * @return PDF
         */
        public function show( Curso $curso ) {

        }

        public function normatividad(){
            return view('curso/normatividad', ['cursos'=>Curso::all()]);
        }
        public function reglamento(){
            return view('curso/reglamento', ['cursos'=>Curso::all()]);
        }
        public function bicicleta(){
            return view('curso/bicicleta', ['cursos'=>Curso::all()]);
        }
        public function habilidades(){
            return view('curso/habilidades', ['cursos'=>Curso::all()]);
        }
        public function ecoestaciones(){
            return view('curso/ecoestaciones', ['cursos'=>Curso::all()]);
        }

}
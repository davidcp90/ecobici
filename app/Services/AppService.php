<?php
	namespace App\Services;

	use App\User;
	use App\Mod_2\Curso\RespuestaUsuario;

	class AppService { 
		
		/**
		 * Valida que la respuesta del cliente sea correcta.
		 * @param  App\AppPregunta  $pregunta  Pregunta a validar
		 * @param  int      		$respuesta Respuesta del cliente
		 * @return boolean
		 */
		public function validarRespuesta( \App\Mod_2\Curso\Pregunta $pregunta, $respuesta, User $user ) {						
			
			// Dejo constancia de la respuesta del usuario
			$this->salvarResultado( $user->id, $respuesta);

			return $pregunta->respuestaCorrecta()->id == $respuesta; 
		}

		/**
		 * Devuelve la proxima pregunta en el cuestionario
		 * @param  App\Cuestionario Cuestionario en el que se esta trabajando.
		 * @param  AppPregunta $pregunta Pregunta a la que se le quiere averiguar la proxima
		 * @return App\Pregunta La proxima pregunta. Devuelve NULL si no hay mas preguntas
		 */
	    public function proximaPregunta( \App\Mod_2\Curso\Cuestionario $cuestionario, \App\Mod_2\Curso\Pregunta $pregunta ) { 
			$proxima = \App\Mod_2\Curso\Pregunta::where('id', '>',  $pregunta->id)
									->where('examen_id', $cuestionario->id)
									->orderBy('id', 'Asc')
									->first();
			
			return $proxima;
	    }


	    protected function salvarResultado ( $user_id, $respuesta_id ) { 
			RespuestaUsuario::create(['users_id'=>$user_id, 'respuestas_id'=>$respuesta_id]);
		}
	}
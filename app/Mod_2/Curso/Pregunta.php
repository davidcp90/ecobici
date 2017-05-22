<?php 
    namespace App\Mod_2\Curso;

    use Illuminate\Database\Eloquent\SoftDeletes;

    class Pregunta extends \Illuminate\Database\Eloquent\Model
    {
        use SoftDeletes;

        protected $table = 'preguntas';

        protected $fillable = array('enunciado', 'examen_id');

        public $timestamps = true;

        protected $dates = ['deleted_at', 'created_at', 'updated_at'];

        /**
         * Devuelve todas las respuestas de la pregunta. ( correctas e incorrectas )
         * @return 
         */
        public function respuestas()
        {
            return $this->hasMany('App\Mod_2\Curso\Respuesta', 'pregunta_id', 'id');
        }

        /**
         * Devuelve la respueta correcta
         * @return App\Respuesta
         */
        public function respuestaCorrecta() { 
        	return $this->respuestas->where('correcta', true)->first();
        }

        /**
         * Devuelve el cuestionario al cual pertenece esta pregunta
         * @return App\Cuestionario
         */
        public function cuestionario ()  { 
             return $this->belongsTo('App\Mod_2\Curso\Cuestionario', 'examen_id', 'id');
        }
    }
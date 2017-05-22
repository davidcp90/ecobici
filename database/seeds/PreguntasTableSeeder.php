<?php

use Illuminate\Database\Seeder;


class PreguntasTableSeeder extends Seeder {
	
	public function run(){
		

		//Pregunta1
		\DB::table('preguntas')->insert(array (
				'id'	=> '1',
				'enunciado'		=> 'En que ciudad puedes usar Ecobici',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	
		

		//Pregunta2
		\DB::table('preguntas')->insert(array (
				'id'	=> '2',
				'enunciado'		=> 'La inscripcion al sistema que costo tiene',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta3
		\DB::table('preguntas')->insert(array (
				'id'	=> '3',
				'enunciado'		=> 'Cuales son los articulos del Codigo de transito de Colombia que reglamentan las normas de comportamiento de los ciclistas',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta4
		\DB::table('preguntas')->insert(array (
				'id'	=> '4',
				'enunciado'		=> 'A que horas debe usar chaleco refletivo',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta5
		\DB::table('preguntas')->insert(array (
				'id'	=> '5',
				'enunciado'		=> 'Cuantos pasajeros pueden ir en la misma bicicleta',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta6
		\DB::table('preguntas')->insert(array (
				'id'	=> '6',
				'enunciado'		=> 'La horquilla en que parte de la bicicleta se encuentra',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta7
		\DB::table('preguntas')->insert(array (
				'id'	=> '7',
				'enunciado'		=> 'Que es la Tija',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta8
		\DB::table('preguntas')->insert(array (
				'id'	=> '8',
				'enunciado'		=> 'Cual es la forma correcta para frenar la bicicleta',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta9
		\DB::table('preguntas')->insert(array (
				'id'	=> '9',
				'enunciado'		=> 'De que forma es mas dificil mantener el equilibrio',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		//Pregunta10
		\DB::table('preguntas')->insert(array (
				'id'	=> '10',
				'enunciado'		=> 'A que altura debes poner tu sillin para no tener problemas con tus rodillas',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'examen_id'  => '1'
			));	

		
	
	}
}
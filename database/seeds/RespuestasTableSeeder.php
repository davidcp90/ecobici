<?php

use Illuminate\Database\Seeder;


class RespuestasTableSeeder extends Seeder {
	
	public function run(){
		


		//Respuesta 1 - Pregunta1
		\DB::table('respuestas')->insert(array (
				'id'	=> '1',
				'respuesta'		=> 'Barranquilla',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '1'
			));	
		

		//Respuesta 2 - Pregunta1
		\DB::table('respuestas')->insert(array (
				'id'	=> '2',
				'respuesta'		=> 'Cali',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '1'
			));	

		//Respuesta 3 - Pregunta1
		\DB::table('respuestas')->insert(array (
				'id'	=> '3',
				'respuesta'		=> 'Bogota',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '1'
			));	

		//Respuesta1 - Pregunta2
		\DB::table('respuestas')->insert(array (
				'id'	=> '4',
				'respuesta'		=> 'Gratis',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '2'
			));	
		
		//Respuesta2 - Pregunta2
		\DB::table('respuestas')->insert(array (
				'id'	=> '5',
				'respuesta'		=> '$5.000',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '2'
			));	

		//Respuesta3 - Pregunta2
		\DB::table('respuestas')->insert(array (
				'id'	=> '6',
				'respuesta'		=> '$13.000',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '2'
			));	

		//Respuesta1 - Pregunta3
		\DB::table('respuestas')->insert(array (
				'id'	=> '7',
				'respuesta'		=> 'Articulos 54 y 55',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '3'
			));	
		
		//Respuesta2 - Pregunta3
		\DB::table('respuestas')->insert(array (
				'id'	=> '8',
				'respuesta'		=> 'Articulos 4 y 5',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '3'
			));	

		//Respuesta3 - Pregunta3
		\DB::table('respuestas')->insert(array (
				'id'	=> '9',
				'respuesta'		=> 'Articulos 94 y 95',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '3'
			));	
		
		//Respuesta1 - Pregunta4
		\DB::table('respuestas')->insert(array (
				'id'	=> '10',
				'respuesta'		=> 'Entre las 2pm y 4pm',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '4'
			));	
		
		//Respuesta2 - Pregunta4
		\DB::table('respuestas')->insert(array (
				'id'	=> '11',
				'respuesta'		=> 'Entre las 6pm y 6am',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '4'
			));	

		//Respuesta3 - Pregunta4
		\DB::table('respuestas')->insert(array (
				'id'	=> '12',
				'respuesta'		=> 'Entre las 12m y 5pm',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '4'
			));	

		//Respuesta1 - Pregunta5
		\DB::table('respuestas')->insert(array (
				'id'	=> '13',
				'respuesta'		=> 'Solo el usuario que registrado en Ecobici',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '5'
			));	
		
		//Respuesta2 - Pregunta5
		\DB::table('respuestas')->insert(array (
				'id'	=> '14',
				'respuesta'		=> 'Dos personas',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '5'
			));	

		//Respuesta3 - Pregunta5
		\DB::table('respuestas')->insert(array (
				'id'	=> '15',
				'respuesta'		=> 'Tres personas, una sentada, una en el tubo superior, y otra sobre la rueda trasera',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '5'
			));	

		//Respuesta1 - Pregunta6
		\DB::table('respuestas')->insert(array (
				'id'	=> '16',
				'respuesta'		=> 'En el Asiento',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '6'
			));	
		
		//Respuesta2 - Pregunta6
		\DB::table('respuestas')->insert(array (
				'id'	=> '17',
				'respuesta'		=> 'En el cuadro',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '6'
			));	

		//Respuesta3 - Pregunta6
		\DB::table('respuestas')->insert(array (
				'id'	=> '18',
				'respuesta'		=> 'En el Tren delantero',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '6'
			));	

		//Respuesta1 - Pregunta7
		\DB::table('respuestas')->insert(array (
				'id'	=> '19',
				'respuesta'		=> 'Es el soporte del sillin',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '7'
			));	
		
		//Respuesta2 - Pregunta7
		\DB::table('respuestas')->insert(array (
				'id'	=> '20',
				'respuesta'		=> 'Por donde pasa la cadena',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '7'
			));	

		//Respuesta3 - Pregunta7
		\DB::table('respuestas')->insert(array (
				'id'	=> '21',
				'respuesta'		=> 'Es la valvula de aire',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '7'
			));	

		//Respuesta1 - Pregunta8
		\DB::table('respuestas')->insert(array (
				'id'	=> '22',
				'respuesta'		=> 'Fuerte y cuando estes casi encima del obstaculo',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '8'
			));	
		
		//Respuesta2 - Pregunta8
		\DB::table('respuestas')->insert(array (
				'id'	=> '23',
				'respuesta'		=> 'Con anticipacion y progresivamente',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '8'
			));	

		//Respuesta3 - Pregunta8
		\DB::table('respuestas')->insert(array (
				'id'	=> '24',
				'respuesta'		=> 'La bicicleta no se puede frenar',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '8'
			));	

		//Respuesta1 - Pregunta9
		\DB::table('respuestas')->insert(array (
				'id'	=> '25',
				'respuesta'		=> 'Cuando vas muy lento',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '9'
			));	
		
		//Respuesta2 - Pregunta9
		\DB::table('respuestas')->insert(array (
				'id'	=> '26',
				'respuesta'		=> 'Cuando vas muy rapido',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '9'
			));	

		//Respuesta3 - Pregunta9
		\DB::table('respuestas')->insert(array (
				'id'	=> '27',
				'respuesta'		=> 'Cuando frenas',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '9'
			));	

		//Respuesta1 - Pregunta10
		\DB::table('respuestas')->insert(array (
				'id'	=> '28',
				'respuesta'		=> 'A una altura muy baja',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '10'
			));	
		
		//Respuesta2 - Pregunta10
		\DB::table('respuestas')->insert(array (
				'id'	=> '29',
				'respuesta'		=> 'A una altura donde tus piernas esten casi extendidas cuando pedaleas hacia abajo',
				'correcta'		=> 't',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '10'
			));	

		//Respuesta3 - Pregunta10
		\DB::table('respuestas')->insert(array (
				'id'	=> '30',
				'respuesta'		=> 'A una altura donde tus piernas se encojan cuando pedaleas hacia abajo',
				'correcta'		=> 'f',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'deleted_at' => null,
				'pregunta_id'  => '10'
			));	
	}
}
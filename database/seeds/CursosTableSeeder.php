<?php

use Illuminate\Database\Seeder;


class CursosTableSeeder extends Seeder {
	
	public function run(){
		

		//Capitulo: 1 del curso
		\DB::table('cursos')->insert(array (
				'id'	=> '1',
				'file'		=> 'Ecobici-Normatividad.pdf',
				'nombre'	=> 'Capitulo 1: Normatividad del Sistema Ecobici',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'sigla' => 'c1'
			));	
		//Capitulo: 2 del curso
		\DB::table('cursos')->insert(array (
				'id'	=> '2',
				'file'		=> 'Ecobici-Reglamento.pdf',
				'nombre'	=> 'Capitulo 2: Reglamento de tránsito Ecobici',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'sigla' => 'c2'
			));	

		//Capitulo: 3 del curso
		\DB::table('cursos')->insert(array (
				'id'	=> '3',
				'file'		=> 'Ecobici-Bicicleta.pdf',
				'nombre'	=> 'Capitulo 3: Conoce la bicicleta',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'sigla' => 'c3'
			));	

		//Capitulo: 4 del curso
		\DB::table('cursos')->insert(array (
				'id'	=> '4',
				'file'		=> 'Ecobici-Habilidades.pdf',
				'nombre'	=> 'Capitulo 4: Habilidades básicas en el uso de la bicicleta',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'sigla' => 'c4'
			));	

		//Capitulo: 5 del curso
		\DB::table('cursos')->insert(array (
				'id'	=> '5',
				'file'		=> 'Ecobici-Ecoestaciones.pdf',
				'nombre'	=> 'Capitulo 5: EcoEstaciones y Rutas Ecobici',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
				'sigla' => 'c5'
			));	
		
	
	}
}
<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PermissionTableSeeder extends Seeder {
	
	public function run()
	{
    DB::table('permissions')->delete();

	  DB::table('permissions')->insert(array (
		    'id'    => 1,
				'name'	=> 'manage-users',
				'display_name'=> 'Administrador de Usuarios',
				'description'=> 'Agregar, y Editar Usuarios',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
				));

	  DB::table('permissions')->insert(array (
		    'id'    => 2,
				'name'	=> 'manage-curso',
				'display_name'=> 'Administrador de Cursos',
				'description'=> 'Gestiona los cursos',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	
	  DB::table('permissions')->insert(array (
		    	'id'    => 3,
				'name'	=> 'usar-bici',
				'display_name'=> ' Sacar bicis',
				'description'=> 'Permiso de sacar y usar una bici',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	  DB::table('permissions')->insert(array (
		    	'id'    => 4,
				'name'	=> 'hacer-curso',
				'display_name'=> 'Realizar curso ',
				'description'=> 'Permiso para realizar el curso o la Evaluación según sea el caso',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	  DB::table('permissions')->insert(array (
		    	'id'    => 5,
				'name'	=> 'gestionar-pagos',
				'display_name'=> ' Gestionar Pagos',
				'description'=> 'Permiso de gestionar pagos',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	  DB::table('permissions')->insert(array (
		    	'id'    => 6,
				'name'	=> 'consultar-estadisticas',
				'display_name'=> ' Constula de historiales',
				'description'=> 'Permiso de consultar historiales',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	}
}
<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RoleTableSeeder extends Seeder {
	
	public function run()
	{
	  DB::table('roles')->delete();
	  DB::table('roles')->insert(array (
	  	  'id'    => 1,
				'name'	=> 'Admin',
				'display_name'=> 'Administrador',
				'description'=> 'Administrador',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	  DB::table('roles')->insert(array (
	  	  'id'    => 2,
				'name'	=> 'Course',
				'display_name'=> 'Course Funcionario',
				'description'=> 'Funcionario de Cursos',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	  DB::table('roles')->insert(array (
	  	  'id'    => 3,
				'name'	=> 'User',
				'display_name'=> 'Usuario',
				'description'=> 'Usuario Ecobici',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));		
	}

}
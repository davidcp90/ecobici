<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {
	
	public function run(){
		DB::table('users')->delete();

		//Usuario administrador inicial
		\DB::table('users')->insert(array (
		 		'name'	=> 'Admin',
				'email'		=> 'admin@ecobicibogota.me',
				'password'	=> \Hash::make('udistrital'),
				'cedula' =>'1234567',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));	
		// Usuario Funcionario para los CURSOS!
		\DB::table('users')->insert(array (
				'name'	=> 'Cursos',
				'email'		=> 'cursos@ecobicibogota.me',
				'password'	=> \Hash::make('udistrital'),
				'cedula' =>'12345678',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));	
		\DB::table('users')->insert(array (
				'name'	=> 'Usuario',
				'email'		=> 'usuario@ecobicibogota.me',
				'password'	=> \Hash::make('udistrital'),
				'cedula' =>'123456789',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));	
		//Demás usuarios
		$faker = Faker::create();

		for ($i=0; $i < 100 ; $i++) { 
			$usuarioTemp = $faker->unique()->email;
			\DB::table('users')->insert(array (
				'name'	=> $faker->Name,
				'email'		=> $usuarioTemp,
				'password'	=> \Hash::make('udistrital'),
				'cedula'     => $faker->unique()->randomNumber(),
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));

		}
	
	}
}
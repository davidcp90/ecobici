<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RoleUserTableSeeder extends Seeder {
	
	public function run()
	{
    DB::table('role_user')->delete();

	  DB::table('role_user')->insert(array (
					'user_id'	=> 1,
					'role_id'=> 1
				));		
	  DB::table('role_user')->insert(array (
					'user_id'	=> 2,
					'role_id'=> 2
				));		
	for ($i=3; $i <= 50; $i++) { 
			DB::table('role_user')->insert(array (
					'user_id'	=> $i,
					'role_id'=> 3
				));		
		}	
	
		
	}
}

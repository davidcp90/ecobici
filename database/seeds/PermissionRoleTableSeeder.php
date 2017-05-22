<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PermissionRoleTableSeeder extends Seeder {
	
	public function run()
	{
	    DB::table('permission_role')->delete();
	    //PERMISOS DE ADMINISTRADOR
		  DB::table('permission_role')->insert(array (
					'permission_id'	=> '1',
					'role_id'=> '1'
				));		
		  DB::table('permission_role')->insert(array (
					'permission_id'	=> '2',
					'role_id'=> '2'
				));		
		  //Permisos de usuario 
		  DB::table('permission_role')->insert(array (
					'permission_id'	=> '3',
					'role_id'=> '3'
				));	
		  DB::table('permission_role')->insert(array (
					'permission_id'	=> '4',
					'role_id'=> '3'
				));	
		  DB::table('permission_role')->insert(array (
					'permission_id'	=> '5',
					'role_id'=> '3'
				));	
		  DB::table('permission_role')->insert(array (
					'permission_id'	=> '6',
					'role_id'=> '3'
				));	
	}
}
<?php

use Illuminate\Database\Seeder;

class AddFuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array (
				'name'	=> 'Funcionario de Registro',
				'display_name'=> 'Funcionario de Registro',
				'description'=> 'Funcionario de Registro',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			));	
    }
}

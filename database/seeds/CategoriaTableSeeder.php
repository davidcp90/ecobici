<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      DB::table('categoria')->insert([
          'id'     => 1,
          'nombre' => 'Partes de la bicicleta',
      ]);
      DB::table('categoria')->insert([
          'id'     => 2,
          'nombre' => 'Normas de transito',
      ]);
      DB::table('categoria')->insert([
          'id'     => 3,
          'nombre' => 'Procesos Ecobici',
      ]);
    }
}

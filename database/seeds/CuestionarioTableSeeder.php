<?php

use Illuminate\Database\Seeder;

class CuestionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Cuestionario principal
      DB::table('cuestionario')->insert([
          'id'      => 1,
          'nombre'  => 'Diagnóstico de conocimientos en uso de la bicicleta',
          'puntaje' => 3,
      ]);
    }
}

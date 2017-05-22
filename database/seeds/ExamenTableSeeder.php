<?php

use Illuminate\Database\Seeder;

class ExamenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Cuestionario principal
      DB::table('examen')->insert([
          'id'      => 1,
          'nombre'  => 'Diagnóstico de conocimientos en uso de la bicicleta',
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
          'deleted_at' => null
      ]);
    }
}
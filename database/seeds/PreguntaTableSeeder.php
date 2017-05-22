<?php

use Illuminate\Database\Seeder;

class PreguntaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pregunta')->insert([
          'id'              => 1,
          'cuestionario_id' => 1,
          'categoria_id'    => 1,
          'enunciado'       => '¿Para que sirven los pedales en una bicicleta?',
      ]);
      DB::table('pregunta')->insert([
          'id'              => 2,
          'cuestionario_id' => 1,
          'categoria_id'    => 2,
          'enunciado'       => '¿Que se debe hacer cuando se aproxima un semaforo y este esta en rojo?',
      ]);
      DB::table('pregunta')->insert([
          'id'              => 3,
          'cuestionario_id' => 1,
          'categoria_id'    => 3,
          'enunciado'       => '¿Es necesario presentar algún documento de identidad para solicitar una bicicleta?',
      ]);
    }
}

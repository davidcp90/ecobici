<?php

use Illuminate\Database\Seeder;

class OpcionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('opcion')->insert([
          'id'          => 1,
          'pregunta_id' => 1,
          'valor'       => 1,
          'opcion'      => 'Para batir el chocolate del desayuno',
          'es_correcta' => 0,
      ]);
      DB::table('opcion')->insert([
          'id'          => 2,
          'pregunta_id' => 1,
          'valor'       => 2,
          'opcion'      => 'Para impulsar la bicicleta',
          'es_correcta' => 1,
      ]);
      DB::table('opcion')->insert([
          'id'          => 3,
          'pregunta_id' => 1,
          'valor'       => 3,
          'opcion'      => 'Para dar reversa',
          'es_correcta' => 0,
      ]);
      DB::table('opcion')->insert([
          'id'          => 4,
          'pregunta_id' => 2,
          'valor'       => 1,
          'opcion'      => 'Dar la vuelta y avanzar',
          'es_correcta' => 0,
      ]);
      DB::table('opcion')->insert([
          'id'          => 5,
          'pregunta_id' => 2,
          'valor'       => 2,
          'opcion'      => 'Pedalear mucho más rapido para alcanzar a pasar',
          'es_correcta' => 0,
      ]);
      DB::table('opcion')->insert([
          'id'          => 6,
          'pregunta_id' => 2,
          'valor'       => 3,
          'opcion'      => 'Frenar',
          'es_correcta' => 1,
      ]);
      DB::table('opcion')->insert([
          'id'          => 7,
          'pregunta_id' => 3,
          'valor'       => 1,
          'opcion'      => 'Si',
          'es_correcta' => 1,
      ]);
      DB::table('opcion')->insert([
          'id'          => 8,
          'pregunta_id' => 3,
          'valor'       => 2,
          'opcion'      => 'No',
          'es_correcta' => 0,
      ]);
    }
}

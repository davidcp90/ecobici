<?php

use Illuminate\Database\Seeder;

class CiclaEstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('prestamo')->delete();
      DB::table('cicla')->delete();
      DB::table('cicla_estado')->delete();
      //Cuestionario principal
      DB::table('cicla_estado')->insert([
          'id'      => 1,
          'nombre'  => 'cicla_estado, id=1, false',
          'estado' => false,
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('cicla_estado')->insert([
          'id'      => 2,
          'nombre'  => 'cicla_estado, id=2, true',
          'estado' => true,
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('cicla_estado')->insert([
          'id'      => 3,
          'nombre'  => 'cicla_estado, id=3, false',
          'estado' => false,
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
    }
}

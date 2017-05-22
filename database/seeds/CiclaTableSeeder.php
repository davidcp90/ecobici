<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CiclaTableSeeder extends Seeder
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
      //Cuestionario principal
      DB::table('cicla')->insert([
          'id'      => 1,
          'nombre'  => 'cicla, id=1,prestamo=1,estado=1',
          'prestamo_id' => 1,
          'cicla_estado_id' => 1,
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('cicla')->insert([
          'id'      => 2,
          'nombre'  => 'cicla, id=2,prestamo=2,estado=2',
          'prestamo_id' => 2,
          'cicla_estado_id' => 2,
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('cicla')->insert([
          'id'      => 3,
          'nombre'  => 'cicla, id=3,prestamo=3,estado=3',
          'prestamo_id' => 3,
          'cicla_estado_id' => 3,
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);


      //demas  ciclas
          $faker = Faker::create();

    for ($i=0; $i < 100 ; $i++) { 
      $ciclaTemp = $faker->unique()->randomNumber();
      \DB::table('cicla')->insert(array (
        'id'  => $ciclaTemp+4,
        'nombre'   => "id =$ciclaTemp",
        'prestamo_id'  => 3,
        'cicla_estado_id' =>3,
        'created_at' =>$faker->dateTime($max = 'now'),
        'updated_at' =>new DateTime ,
      ));

    }
    }
}

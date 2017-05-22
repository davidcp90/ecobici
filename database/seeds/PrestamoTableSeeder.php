<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PrestamoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create();
      //id,cicla_id,estacion_id,user_id,created_at,updated_at
      DB::table('prestamo')->delete();
      //Cuestionario principal
      DB::table('prestamo')->insert([
          'id'      => 1,
          'cicla_id'  => 1,
          'estacion_id'=> 1,
          'user_id' => 1,
          'created_at' =>$faker->dateTime($max = 'now'),
          'updated_at' =>new DateTime ,
      ]);
      DB::table('prestamo')->insert([
          'id'      => 2,
          'cicla_id'  => 2,
          'estacion_id'=> 2,
          'user_id' => 3,
          'created_at' =>$faker->dateTime($max = 'now'),
          'updated_at' =>new DateTime ,
      ]);
      DB::table('prestamo')->insert([
          'id'      => 3,
          'cicla_id'  => 3,
          'estacion_id'=> 3,
          'user_id' => 3,
         'created_at' =>$faker->dateTime($max = 'now'),
          'updated_at' =>new DateTime ,
      ]);

    }
}

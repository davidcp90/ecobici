<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HistoricoPagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('historico_pagos')->delete();
     
      //Cuestionario principal
      DB::table('historico_pagos')->insert([
          'id'      => 1,
          'user_id'  => 1,
          'confirmacion_pago' => 1,
          'monto' => 10000,
          'medio_pago' => "Mastercar",
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('historico_pagos')->insert([
          'id'      => 2,
          'user_id'  => 1,
          'confirmacion_pago' => 1,
          'monto' => 15000,
          'medio_pago' => "Mastercar",
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('historico_pagos')->insert([
          'id'      => 3,
          'user_id'  => 1,
          'confirmacion_pago' => 1,
          'monto' => 25000,
          'medio_pago' => "Mastercar",
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('historico_pagos')->insert([
          'id'      => 4,
          'user_id'  => 3,
          'confirmacion_pago' => 0,
          'monto' => 25000,
          'medio_pago' => "Mastercar",
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);
      DB::table('historico_pagos')->insert([
          'id'      => 5,
          'user_id'  => 3,
          'confirmacion_pago' => 0,
          'monto' => 25000,
          'medio_pago' => "Mastercar",
          'created_at' => new DateTime,
          'updated_at' => new DateTime,
      ]);


      //demas  ciclas
          $faker = Faker::create();

    for ($i=5; $i < 8 ; $i++) { 
      $ciclaTemp = $faker->unique()->randomNumber();
      \DB::table('historico_pagos')->insert(array (
          'id'      => $i+1,
          'user_id'  => 4,
          'confirmacion_pago' => 1,
          'monto' => ($faker->randomDigitNotNull ())*1000,
          'medio_pago' => "Mastercar",
          'created_at' =>$faker->dateTime($max = 'now'),
          'updated_at' => new DateTime,
      ));
        for ($i=8; $i < 13 ; $i++) { 
      $ciclaTemp = $faker->unique()->randomNumber();
      \DB::table('historico_pagos')->insert(array (
          'id'      => $i+1,
          'user_id'  => 3,
          'confirmacion_pago' => 1,
          'monto' => ($faker->randomDigitNotNull ())*1000,
          'medio_pago' => "Mastercar",
          'created_at' =>$faker->dateTime($max = 'now'),
          'updated_at' => new DateTime,
      ));  

    }
    }
}
}
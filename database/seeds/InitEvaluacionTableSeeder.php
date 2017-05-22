<?php

use Illuminate\Database\Seeder;

class InitEvaluacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opcion')->delete();
        DB::table('pregunta')->delete();
        DB::table('cuestionario')->delete();
        DB::table('categoria')->delete();
    }
}

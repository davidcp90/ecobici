<?php

use Illuminate\Database\Seeder;

class BillingBreakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //planes temporales
        DB::table('payment_plans')->insert([
            'price' => 15000,
            'payment_type_id' => 2,
            'payment_periods_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_plans')->insert([
            'price' => 15000,
            'payment_type_id' => 3,
            'payment_periods_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        //anual
        DB::table('payment_plans')->insert([
            'price' => 720000,
            'payment_type_id' => 2,
            'payment_periods_id' => 3,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_plans')->insert([
            'price' => 720000,
            'payment_type_id' => 3,
            'payment_periods_id' => 3,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}

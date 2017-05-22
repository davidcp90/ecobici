<?php

use Illuminate\Database\Seeder;

class BillingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_type')->insert([
            'name' => 'VISA',
            'minimum_length' => 16,
            'max_length' => 16,
            'starts_with' => 4,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_type')->insert([
            'name' => 'MasterCard',
            'minimum_length' => 16,
            'max_length' => 16,
            'starts_with' => 5,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_type')->insert([
            'name' => 'Codensa',
            'minimum_length' => 6,
            'max_length' => 16,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_type')->insert([
            'name' => 'ETB',
            'minimum_length' => 6,
            'max_length' => 16,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_periods')->insert([
            'name' => 'Temporal',
            'days' => 7,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_periods')->insert([
            'name' => 'Mensual',
            'days' => 30,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('payment_periods')->insert([
            'name' => 'Anual',
            'days' => 365,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}

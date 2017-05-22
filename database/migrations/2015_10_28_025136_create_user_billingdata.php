<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBillingdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_type', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 100);
            $table->tinyInteger('minimum_length');
            $table->tinyInteger('max_length');
        });
        Schema::create('payment_periods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 100);
            $table->tinyInteger('months');
        });
        Schema::create('payment_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->tinyInteger('price');
            $table->integer('payment_type_id')->unsigned();
            $table->foreign('payment_type_id')->references('id')->on('payment_type');
            $table->integer('payment_periods_id')->unsigned();
            $table->foreign('payment_periods_id')->references('id')->on('payment_periods');
        });
        Schema::create('user_billingdata', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('payment_type_id')->unsigned();
            $table->foreign('payment_type_id')->references('id')->on('payment_type');
            $table->tinyInteger('reference');
            $table->integer('payment_periods_id')->unsigned();
            $table->foreign('payment_periods_id')->references('id')->on('payment_periods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_type');
        Schema::drop('payment_periods');
        Schema::drop('payment_plans');
        Schema::drop('user_billingdata');
    }
}

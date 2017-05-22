<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('confirmacion_pago');
            $table->integer('monto');
            $table->string('medio_pago',255);
            $table->timestamps();
        });
        Schema::create('quejas', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->string('mensaje',255);
            $table->string('tipo',60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('historico_pagos');
        Schema::drop('quejas');
    }
}

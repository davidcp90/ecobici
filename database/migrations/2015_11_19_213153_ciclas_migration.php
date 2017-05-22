<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CiclasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cicla_estado', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre'); 
            $table->boolean('estado');
            
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('cicla', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('prestamo_id');
            $table->integer('cicla_estado_id');

            $table->index('cicla_estado_id');
            $table->foreign('cicla_estado_id')->references('id')->on('cicla_estado');

            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cicla_estado');
        Schema::drop('cicla');
    }
}

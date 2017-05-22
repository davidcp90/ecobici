<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstacionesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('direccion');
            $table->integer('numero_ciclas');
            $table->tinyInteger('estado');

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
        Schema::drop('estacion');
    }
}

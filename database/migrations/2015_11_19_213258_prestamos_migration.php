<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrestamosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cicla_id');
            $table->integer('estacion_id');
            $table->integer('user_id');

            $table->index('cicla_id');
            $table->foreign('cicla_id')->references('id')->on('cicla');

            $table->index('estacion_id');
            $table->foreign('estacion_id')->references('id')->on('estacion');

            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('prestamo');
    }
}

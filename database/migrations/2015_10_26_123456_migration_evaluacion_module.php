<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigrationEvaluacionModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->engine = 'InnoDB';
        });

        Schema::create('cuestionario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('puntaje')->unsigned();
            $table->engine = 'InnoDB';
        });

        Schema::create('pregunta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cuestionario_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->string('enunciado');

            $table->index('cuestionario_id');
            $table->index('categoria_id');
            $table->foreign('cuestionario_id')->references('id')->on('cuestionario');
            $table->foreign('categoria_id')->references('id')->on('categoria');

            $table->engine = 'InnoDB';
        });

        Schema::create('opcion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pregunta_id')->unsigned();
            $table->string('valor');
            $table->string('opcion');
            $table->boolean('es_correcta');

            $table->index('pregunta_id');
            $table->foreign('pregunta_id')->references('id')->on('pregunta');

            $table->engine = 'InnoDB';
        });

        Schema::create('evaluacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('cuestionario_id')->unsigned();

            $table->index('user_id');
            $table->index('cuestionario_id');
            $table->foreign('cuestionario_id')->references('id')->on('cuestionario');
            $table->foreign('user_id')->references('id')->on('users');

            $table->engine = 'InnoDB';
        });
        
        Schema::create('respuesta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evaluacion_id')->unsigned();
            $table->integer('opcion_id')->unsigned();

            $table->index('opcion_id');
            $table->index('evaluacion_id');
            $table->foreign('evaluacion_id')->references('id')->on('evaluacion');
            $table->foreign('opcion_id')->references('id')->on('opcion');

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
        Schema::drop('respuesta');
        Schema::drop('evaluacion');
        Schema::drop('opcion');
        Schema::drop('pregunta');
        Schema::drop('cuestionario');
        Schema::drop('categoria');
    }
}

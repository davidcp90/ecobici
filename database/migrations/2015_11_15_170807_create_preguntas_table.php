<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('preguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enunciado',255); 
            $table->nullableTimestamps();
            $table->softDeletes();
            $table->integer('examen_id')->unsigned();
            $table->foreign('examen_id')->references('id')->on('examen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preguntas');
    }
}

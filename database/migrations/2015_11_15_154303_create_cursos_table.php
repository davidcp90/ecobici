<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file',255);    
            $table->string('nombre',255);
            $table->nullableTimestamps();
            $table->string('sigla',2); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cursos');
    }
}

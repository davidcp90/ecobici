<?php 
	
	namespace App\Mod_2\Curso;

	/**
	 * Representa a un curso en el sistema.
	 */
	class Curso extends \Illuminate\Database\Eloquent\Model
	{
	    protected $table = 'cursos';

	    protected $fillable = array('file');

	    public $timestamps = true;
	}
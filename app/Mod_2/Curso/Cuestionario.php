<?php 
	
	namespace App\Mod_2\Curso;

	use Illuminate\Database\Eloquent\SoftDeletes;

	/**
	 * Representa a un cuestionario en el sistema.
	 */
	class Cuestionario extends \Illuminate\Database\Eloquent\Model
	{
		use SoftDeletes;

	    protected $table = 'examen';

	    protected $fillable = ['nombre'];

	    public $timestamps = true;

	    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

	    /**
	     * Devuelve las preguntas disponibles para este cuestionario
	     * @return Illuminate\Support\Collection
	     */
	    public function preguntas () { 
	    	return $this->hasMany('App\Mod_2\Curso\Pregunta', 'examen_id', 'id');
	    }

	    /**
	     * Filtra solo los que tienen preguntas definidas
	     *
	     * @return \Illuminate\Database\Eloquent\Builder
	     */
	    public function scopeConPreguntas($query)
	    {
	        return $query->join('preguntas', 'preguntas.examen_id', '=', 'examen.id')
	        			 ->select( \DB::raw('examen.*') )
	        			 ->distinct();
	    }
	}
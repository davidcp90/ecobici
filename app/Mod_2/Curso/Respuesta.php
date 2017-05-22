<?php 
	
	namespace App\Mod_2\Curso;

	use Illuminate\Database\Eloquent\SoftDeletes;

	/**
	 * Representa una respuesta de pregunta.
	 */
	class Respuesta extends \Illuminate\Database\Eloquent\Model
	{
		use SoftDeletes;

	    protected $table = 'respuestas';

	    public $timestamps = true;

	    protected $fillable = ['respuesta', 'correcta'];

	    protected $dates = ['deleted_at', 'created_at', 'updated_at'];


	    protected $casts = [
	        'correcta' => 'boolean',
	    ];

	    /**
	     * Pregunta a la que pertenece la respuesta
	     * @return App\Pregunta | 
	     */
	    public function preguntas()
	    {
	        return $this->belongsTo('App\Mod_2\Curso\Pregunta', 'pregunta_id', 'id');
	    }
	}
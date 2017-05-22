<?php 
	
	namespace App\Mod_2\Curso;

	use Illuminate\Database\Eloquent\SoftDeletes;

	/**
	 * Representa una respuesta de pregunta.
	 */
	class RespuestaUsuario extends \Illuminate\Database\Eloquent\Model
	{
		use SoftDeletes;

	    protected $table = 'respuestas_usuario';

	    public $timestamps = true;

	    protected $fillable = ['respuestas_id', 'users_id'];

	    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

	    /**
	     * Pregunta a la que pertenece la respuesta
	     * @return App\Users | 
	     */
	    public function usuario()
	    {
	        return $this->hasOne('App\Phone', 'id', 'users_id');
	    }

	    /**
	     * Respuesta que marco el usuario
	     * @return App\Respuesta
	     */
	    public function respuesta () { 
	    	return $this->belongsTo('App\Mod_2\Curso\Respuesta', 'respuestas_id', 'id');
	    }
	}
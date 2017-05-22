<?php

namespace App\Mod_2\Evaluacion;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    public $timestamps = false;

    protected $fillable = ['id', 'nombre'];

    protected $guarded = [];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categoria';

    public function preguntas(){
      return $this->hasMany('App\Mod_2\Evaluacion\Pregunta');  
    }
}

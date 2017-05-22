<?php

namespace App\Mod_2\Evaluacion;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
  public $timestamps = false;

  protected $fillable = ['id', 'cuestionario_id', 'user_id'];

  protected $guarded = [];
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'evaluacion';
  public function cuestionario(){
    return $this->belongsTo('App\Mod_2\Evaluacion\Cuestionario', 'cuestionario_id');
  }
  public function user(){
    return $this->belongsTo('App\User', 'user_id');
  }
  public function respuestas(){
    return $this->hasMany('App\Mod_2\Evaluacion\Respuesta');  
  }
}
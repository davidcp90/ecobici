<?php

namespace App\Mod_2\Evaluacion;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
  public $timestamps = false;

  protected $fillable = ['id', 'cuestionario_id', 'categoria_id', 'enunciado'];

  protected $guarded = [];
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'pregunta';
  
  public function categoria()
  {
      return $this->belongsTo('App\Mod_2\Evaluacion\Categoria', 'categoria_id');
  }

  public function cuestionario()
  {
      return $this->belongsTo('App\Mod_2\Evaluacion\Cuestionario', 'cuestionario_id');
  }
  public function opciones(){
    return $this->hasMany('App\Mod_2\Evaluacion\Opcion');  
  }
}

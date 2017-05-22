<?php

namespace App\Mod_2\Evaluacion;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
  public $timestamps = false;

  protected $fillable = ['id', 'evaluacion_id', 'opcion_id'];

  protected $guarded = [];
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'respuesta';

  public function opcion()
  {
      return $this->belongsTo('App\Mod_2\Evaluacion\Opcion', 'opcion_id');
  }
  public function evaluacion()
  {
      return $this->belongsTo('App\Mod_2\Evaluacion\Evaluacion', 'evaluacion_id');
  }
}

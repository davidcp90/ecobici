<?php

namespace App\Mod_2\Evaluacion;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
  public $timestamps = false;

  protected $fillable = ['id', 'pregunta_id', 'valor', 'opcion', 'es_correcta'];

  protected $guarded = [];
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'opcion';
  
  public function pregunta()
  {
      return $this->belongsTo('App\Mod_2\Evaluacion\Pregunta', 'pregunta_id');
  }
}

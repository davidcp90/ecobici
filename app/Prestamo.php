<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
	protected $table = 'prestamo';

    

    public function cicla()
    {
    	return $this->belongsTo('App\Cicla');
    }

    public function estacion()
    {
    	return $this->belongsTo('App\Estacion');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function rutas()
    {
    	return $this->hasMany('App\Ruta', 'ruta_id');
    }
}

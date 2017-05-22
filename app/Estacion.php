<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacion extends Model
{
	protected $table = 'estacion';

    protected $fillable = ['id','nombre', 'latitud', 'longitud', 'direccion', 'numero_ciclas', 'estado'];

    protected $hidden = ['created_at', 'updated_at']; 

    public function prestamos()
    {
    	return $this->hasMany('App\Prestamo');
    }

}

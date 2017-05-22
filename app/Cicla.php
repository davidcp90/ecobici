<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cicla extends Model
{
	protected $table = 'cicla';

    protected $fillable = ['nombre'];

    protected $hidden = ['created_at', 'updated_at']; 

    public function estado()
    {
    	return $this->belongsTo('App\CiclaEstado');
    }

    public function prestamos()
    {
    	return $this->hasMany('App\Prestamo', 'prestamo_id');
    }
}

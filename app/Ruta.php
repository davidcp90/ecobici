<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
	protected $table = 'ruta';

    protected $fillable = ['estado'];

    protected $hidden = ['created_at', 'updated_at']; 

    public function prestamo()
    {
    	return $this->belongsTo('App\Prestamo', 'prestamo_id');
    }
}

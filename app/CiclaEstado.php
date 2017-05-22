<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CiclaEstado extends Model
{
	protected $table = 'cicla_estado';

    protected $fillable = ['nombre', 'estado'];

    protected $hidden = ['created_at', 'updated_at']; 

    public function ciclas()
    {
    	return $this->hasMany('App\Cicla');
    }
}

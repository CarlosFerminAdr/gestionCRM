<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function servicios(){
        return $this->hasMany('App\Models\Servicio');
    }
}

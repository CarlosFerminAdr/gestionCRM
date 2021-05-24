<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function servicios(){
        return $this->hasMany('App\Models\Servicio');
    }
}

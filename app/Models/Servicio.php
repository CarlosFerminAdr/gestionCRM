<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = ['fecha','hora','costo_total', 'cantidad', 'cliente_id', 'categoria_id'];

    public function productos(){
        return $this->belongsToMany(Producto::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}

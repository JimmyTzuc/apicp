<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidades';
    use HasFactory;

    // Relacion uno a muchos inversa
    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}

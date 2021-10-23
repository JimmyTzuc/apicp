<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    
    

    use HasFactory;

    // Relacion uno a muchos inversa
    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    //Relacion uno a muchos
    public function localidades(){
       return $this->hasMany(Localidad::class); 
    }
}

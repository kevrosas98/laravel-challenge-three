<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public function genero(){
        return $this->belongsTo(Genero::class);
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }
}


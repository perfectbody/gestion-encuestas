<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncuestaPregunta extends Model
{
    use HasFactory;

    public function encuesta(){

        return $this->belongsTo(Encuesta::class);
    }
    public function pregunta(){

        return $this->belongsTo(Pregunta::class);
    }
}

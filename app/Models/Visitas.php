<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'motivo_visita',
        'data',
        'agente',
    ];
}

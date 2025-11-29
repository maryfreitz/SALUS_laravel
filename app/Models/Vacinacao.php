<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacinacao extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'nome_paciente',
        'vacina',
        'data_aplicacao',
        'responsavel',
    ];
}

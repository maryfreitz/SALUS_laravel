<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gestante extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_gestante',
        'idade_gestacao',
        'data_prevista_parto',
        'responsavel_acompanhamento',
    ];
}

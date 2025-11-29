<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BolsaFamilia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_familia',
        'nascimento',
        'peso',
        'altura',
    ];
}

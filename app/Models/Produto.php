<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'lancamento',
        'ativo',
    ];

    protected $casts = [
        'lancamento' => 'date',
        'ativo' => 'boolean',
        'preco' => 'decimal:2',
    ];
}

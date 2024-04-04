<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    /**
     *
     * Atributos da entidade Pizza
     * @var array<int, string>
     */
    protected $fillable = [
        'nome_pizza',
        'descricao_pizza',
        'preco_pizza',
        'img_pizza'
    ];
}

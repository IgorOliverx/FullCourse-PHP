<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    use HasFactory;

    /**
     * Define a relação entre aluno e turma
     * @return BelongsTo
     */
    public function turma(): BelongsTo
    {
        //Um aluno pertence a somente uma turma
        return $this->belongsTo(Turma::class);
        //note que os metodos que eu chamo depois da referencia é o Eloquent ORM
    }
}

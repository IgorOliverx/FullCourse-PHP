<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turma extends Model
{
    use HasFactory;

    /**
     * Define a relação entre turma e aluno
     *
     * @return HasMany
     */
    public function alunos():HasMany    //uma turma tem varios alunos!
        //a partir dessa relação eu tenho:
    {
        //retorno do objeto (hasMany) - muitos --> classe Aluno
        return $this->hasMany(Aluno::class);
    }
}

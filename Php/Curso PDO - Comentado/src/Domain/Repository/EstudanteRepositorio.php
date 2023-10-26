<?php

namespace Alura\Pdo\Domain\Repository;

use Alura\Pdo\Domain\Model\Student;

interface EstudanteRepositorio
{
    public function acessarTodosEstudantes(): array;

    public function salvarEstudante(Student $student): bool;

    public function excluirEstudantes(Student $student): bool;

    public function insert(Student $student): bool;

    public function update(Student $student): bool;

    public function hidratarListaEstudantes(\PDOStatement $stmt): array;
}
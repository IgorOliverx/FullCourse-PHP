<?php


namespace Alura\Pdo\Infrastructure\Repositorio;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\EstudanteRepositorio;
use Alura\Pdo\Infrastructure\Persistence\FabricaDeConexao;

class PdoEstudanteRepositorio implements EstudanteRepositorio
{
    protected \PDO $conexao;
    protected \PDO $resultado;
    public function __construct(\PDO $conexao)
    {
        $this->conexao = $conexao;
    }
    public function acessarTodosEstudantes(): array
    {
        $sql = 'SELECT * FROM students2;';
        $stmt = $this->conexao->query($sql);

        return $this->listaEstudantes($stmt);
    }

    public function salvarEstudante(Student $student): bool
    {
        if($student ->id() === null){
            return $this->insert($student);
        }
        return $this->update($student);
    }

    public function excluirEstudantes(Student $student): bool
    {
       $stmt = $this->conexao->prepare('DELETE FROM students2 WHERE id = ?;');
       $stmt ->bindValue(1, $student->id(), PDO::PARAM_INT);

       return $stmt->execute();
    }


    public function insert(Student $student): bool
    {
        $insert = 'INSERT INTO students2 (name, birth_date) VALUES (:name,:birth_date);';
        $stmt = $this->conexao->prepare($insert);

        $sucesso = $stmt->execute(
            [
                ':name' => $student->name(),
                ':birth_date' => $student->birthDate()->format('Y-m-d'),
            ]
        );
        $student -> defineId($this->conexao->lastInsertId());

        return $sucesso;
    }

    public function update(Student $student): bool
    {
        $update = 'UPDATE students2 SET name = :name, birth_date = :birth_date WHERE id = :id;';
        $stmt = $this->conexao->prepare($update);
        $stmt->bindValue(':name', $student->name());
        $stmt->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
        $stmt->bindValue(':id', $student->id(), \PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function hidratarListaEstudantes(\PDOStatement $stmt): array
    {
        $estudanteDataLista = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $listaEstudantes = [];

        foreach ($estudanteDataLista as $item) {
            $listaEstudantes[] = new Student(
                $item['id'],
                $item['name'],
                new \DateTimeImmutable($item['birth_date'])
            );
        }
        return $listaEstudantes;
    }
}
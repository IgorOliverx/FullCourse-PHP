<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use Mockery\Exception;
use PDO;
class FabricaDeConexao
{
    public static function criarConexao(): \PDO
    {
        $caminhoBanco = __DIR__ . '/../../../banco.sqlite';
        return new PDO("sqlite:$caminhoBanco");
    }
}

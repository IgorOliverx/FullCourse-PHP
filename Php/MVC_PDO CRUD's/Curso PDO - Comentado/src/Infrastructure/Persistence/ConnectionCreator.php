<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    //criei um método para instanciar objetos de conexão -> codigo modular e flexivel usando principios POO
    public static function createConnection(): PDO
    {
        try{
        //instancia de objeto do pdo
        $connection = new PDO(
            'mysql:host=172.17.0.2;dbname=banco',
            'root',
            'senhalura'
        );
        //setando atributos para tratamento de erros
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //setando atriutos para ter retornos em forma de arrays associativos em consultas
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //retorno da conexao
        return $connection;
        }catch(\PDOException $e){
            $e->getMessage();
            die();
        }
    }
}

<?php

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\FabricaDeConexao::criarConexao();


//3 parametros

$resultado = $pdo->query('SELECT * FROM  students2;'); //buscou a tabela students
//var_dump($result->fetchAll()); // retornou todos os dados da tabela
$listaData = $resultado->fetchAll(PDO::FETCH_ASSOC);
$listaEstudantes = [];



foreach ($listaData as $listData){
    $listaEstudantes = new \Alura\Pdo\Domain\Model\Student(
        $listData['id'],
        $listData['name'],
        new \DateTimeImmutable($listData['birth_date'])
    );
}
var_dump($listaEstudantes);
<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\FabricaDeConexao;
use Alura\Pdo\Infrastructure\Repositorio\PdoEstudanteRepositorio;

require_once 'vendor/autoload.php';

$connection = FabricaDeConexao::criarConexao();
$studentRepository = new PdoEstudanteRepositorio($connection);


$connection->beginTransaction();
$aStudent = new Student(
    null,
    'maria siqueira',
    new DateTimeImmutable('2006-05-03')
);
$studentRepository->salvarEstudante($aStudent);



$asStudent = new Student(
    null,
    'Leticia oliveira',
    new DateTimeImmutable('2005-08-26')
);
$studentRepository->salvarEstudante($asStudent);

$connection -> rollBack();


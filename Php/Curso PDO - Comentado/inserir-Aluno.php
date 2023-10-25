<?php
require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';

//3 parametros
$pdo = new PDO("sqlite:$caminhoBanco");//dsn = driver que vou utilizar

echo 'Conectei' . PHP_EOL;

$pdo->exec('CREATE TABLE students2 (id INTEGER PRIMARY KEY, name TEXT VARCHAR(255), birth_date TEXT);');

echo 'criei a tabela ';

$student = new \Alura\Pdo\Domain\Model\Student(null,'Igor oliveira', new DateTimeImmutable('2006-10-06'));

$sqlInsert = "INSERT INTO students2 (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

//echo $sqlInsert;

$pdo->exec($sqlInsert);
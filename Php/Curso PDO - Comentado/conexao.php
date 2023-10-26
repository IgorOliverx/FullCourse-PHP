<?php
require_once 'vendor/autoload.php';
$caminhoBanco = __DIR__ . '/banco.sqlite';

$pdo = new PDO("sqlite:$caminhoBanco");//dsn = driver que vou utilizar
//3 parametros

echo 'Conectei' . PHP_EOL;

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT VARCHAR(255), birth_date TEXT);');

echo 'criei a tabela ';
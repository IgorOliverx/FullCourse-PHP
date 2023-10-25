<?php
$caminhoBanco = __DIR__ . '/banco.sqlite';

//3 parametros
$pdo = new PDO("sqlite:$caminhoBanco");//dsn = driver que vou utilizar

echo 'Conectei' . PHP_EOL;

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT VARCHAR(255), birth_date TEXT);');

echo 'criei a tabela ';
<?php

//definindo a variavel de onde se encontra o banco
$db = __DIR__ . '/banco.sqlite';

//instancia do pdo -> classe de manipulação
$pdo = new PDO("sqlite:$db");

//executando instrução sql
$pdo->exec('CREATE TABLE videos(id INTEGER PRIMARY KEY , url TEXT, title TEXT);');
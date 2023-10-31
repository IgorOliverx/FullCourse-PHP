<?php

$dbName = 'bank.sqlite';
$pdo = new PDO("sqlite:$dbName");
$pdo->query('DELETE FROM nomes;');

header('Location: /listagem-videos.php');
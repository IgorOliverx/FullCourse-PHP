<?php

$dbName = 'bank.sqlite';
$pdo = new PDO("sqlite:$dbName");


$id = $_GET['id'];//busca o id com a superglobal get
$sql = 'DELETE FROM nomes WHERE id = ?'; //prepara uma instrução de exclusao a partir do id
$stmt = $pdo->prepare($sql); // prepara o statement
$stmt->bindValue(1, $id); //parametros -> proteção contra sql injection
$stmt->execute();
header('location: /listagem-videos.php');

<?php
$db = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$db");

$id = $_GET['id'];//busca o id com a superglobal get
$sql = 'DELETE FROM videos WHERE id = ?'; //prepara uma instrução de exclusao a partir do id
$stmt = $pdo->prepare($sql); // prepara o statement
$stmt->bindValue(1, $id); //parametros -> proteção contra sql injection

//executa o stmt -> consequentemente a instrução sql com uma verificação
if($stmt ->execute() === false){
    //cabecalho http que o navegador processa
    header('Location: /index.php?sucesso=0');
}
header('Location: /index.php?sucesso=1');



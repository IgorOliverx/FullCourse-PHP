<?php

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\FabricaDeConexao::criarConexao();

$prepararStmt = $pdo->prepare('DELETE FROM students2 WHERE id = ?;');
$prepararStmt->bindValue(1, 2, PDO::PARAM_INT);

if($prepararStmt->execute()){
    echo "aluno removido com sucess";
}

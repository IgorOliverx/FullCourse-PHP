<?php
$dbName = 'bank.sqlite';
$pdo = new PDO("sqlite:$dbName");
//$pdo->query('DELETE FROM nomes;');//comando para deletar todas os dados da tabela mas mantendo a estrutura -> equivalente ao TRUNCATE TABLE

$id = $_GET['id'];//busca o id com a superglobal get
//extraindo as variaveis dos verbos POST
$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');

$sql = 'UPDATE nomes SET nome = :nome, sobrenome = :sobrenome WHERE id = :id'; //prepara uma instrução de exclusao a partir do id
$stmt = $pdo->prepare($sql); // prepara o statement
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //parametros -> proteção contra sql injection
$stmt->bindValue(':nome', $nome); //parametros -> proteção contra sql injection
$stmt->bindValue(':sobrenome', $sobrenome); //parametros -> proteção contra sql injection
$stmt -> execute();


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


        <form name="" method="post" action="">
            <label>Nome</label>
            <input type="text" name="nome">
            <label>Sobrenome</label>
            <input type="text" name="sobrenome">
            <input type="submit" value="Enviar">

        </form>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //superglobal server acessa o cabeçalho ou o header da requisiçãop
    $dbName = 'bank.sqlite';
    $pdo = new PDO("sqlite:$dbName");

    $nome = filter_input(INPUT_POST, 'nome');
    $sobrenome = filter_input(INPUT_POST, 'sobrenome');

    if (!empty($nome) && !empty($sobrenome)) {
        $sql = 'INSERT INTO nomes (nome, sobrenome) VALUES (?, ?);';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $nome);
        $statement->bindValue(2, $sobrenome);
        $statement->execute();
    }
}


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
    <a href="index.php">Voltar</a>

</form>
</body>
</html>

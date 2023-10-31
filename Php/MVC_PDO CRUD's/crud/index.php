<?php
$dbName = 'bank.sqlite';
$pdo = new PDO("sqlite:$dbName");
//$pdo->exec('CREATE TABLE nomes (id INTEGER PRIMARY KEY, nome TEXT, sobrenome TEXT);');
$listaDeNomes = $pdo->query('SELECT * FROM nomes;')->fetchAll(PDO::FETCH_ASSOC);
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


<main>
    <div class="container">
        <h3 style="margin-left: 550px">CRUD BÁSICO</h3>

        <table border="1" width="100%">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Ações</th>
                </tr>
            <?php foreach ($listaDeNomes as $list): ?>
                <tr>
                    <td>
                    <!--      codigo php-->
                        <?= $list['id'] ?>
                    </td>
                    <td>
                        <!--    codigo php-->
                        <?= $list['nome'] ?>
                    </td>
                    <td>
                        <!--  codigo php-->
                        <?= $list['sobrenome'] ?>
                    </td>
                    <td>
                        <a href="/update.php?id=<?= $list['id']; ?>">Editar</a>
                        <a href="/delete.php?id=<?= $list['id']; ?>">Excluir</a>
                        <a href="/deleteTudo.php">Excluir TUDO</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <a href="/create.php">Adicionar</a>
            </table>

    </div>




</main>


</body>
</html>
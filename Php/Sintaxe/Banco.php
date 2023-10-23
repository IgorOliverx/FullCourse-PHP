<?php
//Introdução a orientação a Objetos no PHP - criação de funções

//Serve para incluir outro aquivo aqui
//   include 'funcoes.php';

//Esse é o suprassumo do include - da erro no programa caso nao exista e faz a verificação se o arquivo ja foi incluido
    require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-91' => [
        'titular' => 'Alex',
        'saldo' => 1999
    ],
    '123.456.789-41' => [
        'titular' => 'Breno Lopes',
        'saldo' =>2020
    ],
    '123.453.789-91' => [
        'titular' => 'Deyverson',
        'saldo' => 2021
    ]
];
//  $contasCorrentes['123.453.789-91'] ['saldo'] -= 600;

$contasCorrentes['123.456.789-91'] = depositar($contasCorrentes['123.456.789-91'], 1000);
titularMaisculo($contasCorrentes['123.453.789-91']);
?>

<!doctype html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeiro arquivo HTML + PHP</title>
</head>
<body>

<h1>Contas Correntes</h1>
<dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
    <dd></dd>
    <dt><?=$conta['titular']; ?> - <?=$cpf?> </dt>
        <dd>
            Saldo: <?= $conta['saldo'];?>
        </dd>
    <?php } ?>

</dl>
</body>
</html>

















































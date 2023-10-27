<?php




//Usando array associativo no php

$conta1 = [
    'titular' => 'Alex',
    'saldo' => 1999
];

$conta2 = [
    'titular' => 'Breno Lopes',
    'saldo' =>2020
];

$conta3 =[
    'titular' => 'Deyverson',
    'saldo' => 2021
];


$contasCorrentes = [$conta1, $conta2, $conta3];


//fazer um loop pra exibir o titular em cada conta...
for ($j = 0; $j < count($contasCorrentes); $j++) {
    echo $contasCorrentes[$j] ['titular'] .PHP_EOL;}








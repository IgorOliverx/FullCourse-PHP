<?php

$notas = [
    10,
    8,
    9,
    7,
];

$notasOrdenadas = $notas; // precisamos fazer isto pois o sort modifica o array => copiamos para outra variavel e etnão a ordenamos
sort($notasOrdenadas); // organizou do menor para o maior => trocou seus índices e etc... =>
//usando essa função em strings ela organiza em ordem alfabetica, mas as metricas podem ser mudadas;


echo 'Desordenadas' . PHP_EOL;
var_dump($notas);

echo 'Ordenadas => crescente' . PHP_EOL ;
var_dump($notasOrdenadas);

//sort([3,5,2]); => isso gera um erro pois o sort() só funciona com variaveis como parametros
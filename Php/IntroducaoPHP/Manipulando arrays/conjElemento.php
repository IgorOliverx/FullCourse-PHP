<?php

$dados = ['Igor', 10, 24];
list($nome, $nota, $idade) = $dados ; //cria uma "chave" e atribui uma variável a cada elemento do array
// MAS SOMENTE PARA ARRAY COM INDICE NUMERICO, SE EU USAR ASSOCIATIVO,TENHO QUE INFORMAR O VALOR DAS CHAVES


//Outra forma de fazer => [var,var,var] = $dados;

$dados2 = [
    'iguito' => 'Igor',
    'idade1' => 16,
    'nota1' => 10
];
extract($dados2); // => so fazsr de dados confiaveis
compact(); // pega variaveis e transforma em um arrayv => passa em forma de string em aspas simples
//função bastante usada
print_r("$iguito $idade1 $nota1");
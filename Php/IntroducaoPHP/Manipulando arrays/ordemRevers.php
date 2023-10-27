<?php
$notas = [
  'igor' =>  10,
    'Gustavo' => 9,
   'Henrique' => 8,
   'Sebastião' => 7,
   'Afonso' => 6,
   'Milton' => 5,
];


//funções de ordenação


//altera as chaves
asort($notas);
//mantém as chaves
arsort($notas);
//ordena utilizando as chaves, nesse caso em ordem alfabetica
ksort($notas);
//ordena utilizando as chaves, nesse caso de Z-A
krsort($notas);
var_dump($notas);



echo gettype($notas); //gettype identifica o tipo da variavel


//esse bloco verifica se a variavel é uma array
if(is_array($notas)){
    echo "Sim";
}

var_dump(array_is_list($notas)); // função booleana que retorna false para um array que é número => retorna true para um array numerico
//aqui da pra saber se posso rodar um laço for dentro de um array.
//true => pode usar o for


$f = [
    'primeiro' => 1,
    'segundo',
    'terceiro'
];

var_dump(array_is_list($f));
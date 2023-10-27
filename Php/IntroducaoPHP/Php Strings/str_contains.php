<?php

//verificando se uma string existe dentro de outra string => basicamente encontrar orações em uma string

$nome = 'Igor Ferreira de Oliveira';

$teste = str_contains($nome, 'Oliveira');
var_dump($teste); // return bool(true)

print($teste) . PHP_EOL; //return = 1;

// 1 === true

if($teste) {
    echo "Esta pessoa é da minha família!"; // echo "$nome é de minha familia" => interpolação de variavel com string
}else{
    echo "Este elemento é um pouquito estranho";
}


var_dump($resultado = str_contains('Teste de string', 'de')); // retornou bool pois o segundo parametro "de" existe no primeiro "teste de string"
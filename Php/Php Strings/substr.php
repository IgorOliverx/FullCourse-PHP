<?php
//função serve para retirar uma substring de uma string
//é obsoleto pois não existe a refatoração do mesmo código

$email = 'igorfo2006@gmail.com';
$arroba = strpos($email, '@');//buscar a posição do parametro na string ou variavel que foi passada
$nome='Igor Oliveira';

echo substr($email, 0, $arroba);
echo substr($email, $arroba +1);




$cont  = substr($email, 0, 8);
echo substr($email, 10, 6 ) . PHP_EOL;




$num = rand(1,124123);
$user = "$cont$num";
print $user;


//dividide uma string e crie uma array delas
var_dump(list($nome, $sobrenome) = explode(' ', $nome));
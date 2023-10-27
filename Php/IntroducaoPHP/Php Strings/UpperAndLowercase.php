<?php


$nome = 'Igor Oliveíra';
$senha = 'rfááááá';
$email = 'igor@gmail.com';

echo strlen($senha) . PHP_EOL;

if(mb_strlen($senha)< 8){
    echo "Senha insegura";
}

$arroba = strpos($email, '@');

$usuario = substr($email, 0, $arroba);


//FAZ UMA COPIA DA VARIAVEL E RETORNA EM MAISCULO OU MINUSCULO
echo mb_strtoupper($usuario) . PHP_EOL;
echo mb_strtolower($usuario);

//dividide uma string e crie uma array delas
// explode é util para pegar infos complexas => vai usar bastante EX: igor,fee,fw123,3215d,12,d,45,1,f
//contar isto com substr ficaria dificil, concorda?
var_dump(list($nome, $sobrenome) = explode(' ', $nome));


echo trim($email) . PHP_EOL;
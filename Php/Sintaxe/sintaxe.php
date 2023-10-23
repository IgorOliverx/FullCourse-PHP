<?php


$nome = "João";
echo 'Olá $nome'; // Saída: Olá $nome (não expande a variável)
echo "Olá $nome"; // Saída: Olá João (expande a variável)

//concatenação

$primeiraString = "Olá, ";
$segundaString = "Mundo!";
$resultado = $primeiraString . $segundaString;

echo $resultado; // Saída: Olá, Mundo
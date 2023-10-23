<?php
require 'Caneta.php';

$canetaBic = new Caneta();
$canetaBic -> marca = 'BIC';
$canetaBic -> cor = 'Azul';
$canetaBic -> espessuraPonta = 'Fina';
$canetaBic -> preco = 1.99;
$canetaBic -> escrever();
$canetaBic -> rabiscar();
var_dump($canetaBic);


$caneta = new Caneta();
$caneta -> marca = 'Generica';
$caneta -> cor = 'Rosa choque';
$caneta -> espessuraPonta = 'Grossa';
$caneta -> rabiscar();
var_dump($caneta);
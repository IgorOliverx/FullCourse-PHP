<?php

use Orientacao\Pessoa;

require_once ('Pessoa.php');

$pessoa1 = new Pessoa(1.80, "Celso", "Ricardo");
$pessoa1 ->setSobrenome("Carvalho");

var_dump($pessoa1 ->getNome());























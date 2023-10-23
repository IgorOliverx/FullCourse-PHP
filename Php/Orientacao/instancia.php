<?php

require_once ('Pessoa.php');

$pessoa1 = new \Orientacao\Pessoa(1.80, "Celso", "Ricardo");
$pessoa1 ->setSobrenome("Carvalho");

var_dump($pessoa1 ->getNome());























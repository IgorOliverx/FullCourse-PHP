<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Conta\ContaCorrente, Conta\ContaPoupanca, Conta\Titular, CPF, Endereco};

$conta = new ContaCorrente(
  new Titular(
      new CPF('123.456.789-10'),
      "Igor Oliveira",
      new Endereco("Americana", 'Sementina', 'rua marechal deodoro', '1999')
  )
);

$conta -> deposita(5000);

$conta -> saca(500);

var_dump($conta);
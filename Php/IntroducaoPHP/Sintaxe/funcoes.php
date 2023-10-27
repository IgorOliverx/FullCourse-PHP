<?php

function exibeMensagem (string $mensagem): void
{
    echo $mensagem . '<br>';
}
//Referenciado no PHP como subrotina

function sacar(array $conta, float $valorSaque): array
{
    if ($valorSaque > $conta ['saldo']){
        exibeMensagem("Você não pode sacar");
    } else{
        $conta['saldo'] -= $valorSaque;
        exibeMensagem("Saque efetuado com sucesso");
    }

    return $conta;
}

function depositar(array $conta, float $valorDeposito): array
{
    if($conta == true && $valorDeposito > 0){
        exibeMensagem("Depósito efetuado com sucesso");
        $conta['saldo'] += $valorDeposito;
    }else{
        exibeMensagem("Erro! Verifique valor ou conta");
    }


    return $conta;
}
//Este & dá acesso total ao meu "banco de dados - não muito usada por possivelmente modificar muitas partes do base"
function titularMaisculo (array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    //usando a função list => pratica de POO
    ['titular'=>$titular, 'saldo'=>$saldo] = $conta;
  echo "<li> Titular: $titular. Saldo: $saldo";
}




<?php

//percorrendo array com foreach


//modificando os indíces do array para depois procurá-los
$contasCorrentes = [
   '123.456.789-91' => [
       'titular' => 'Alex',
       'saldo' => 1999
   ],
    '123.456.789-41' => [
        'titular' => 'Breno Lopes',
        'saldo' =>2020
    ],
     '123.453.789-91' => [
         'titular' => 'Deyverson',
         'saldo' => 2021
     ]
];

$contasCorrentes['123.121.233-245'] = [
    'titular' => 'Claudia',
    'saldo' => '23423'
];

//Com o foreach não precisamos conhecer a chave de seus valores ou seus indíces
// criei um foreach que percorrey o contascorrentes e defini a $cpf como a chave e acessei o os atributos deste modelo dando-lhes o nome de conta
// A partir de conta eu acesso os atributos - indices do array asssociativo (De strings)
foreach ($contasCorrentes as $cpf => $conta) {
   // echo $conta['saldo'] .PHP_EOL; //
   // echo $cpf .PHP_EOL;

    echo $cpf . " " . $conta['titular'] .PHP_EOL;
}

//um array associativo precisa que declare as chaves ao tentar adicionar um elemento no array. Lembre-se que todos os elementos serão add na ultima posição do indice
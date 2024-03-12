<?php

echo '<pre>';


//Transformando o arquivo 'dados.json' em uma string
$dadosJson = file_get_contents('./dados.json');

//print_r($dadosJson);


//Transformando a string em um OBJETO JSON
$funcaoDecode = json_decode($dadosJson);
print_r($funcaoDecode);

//estrutura para percorrer um array de objetos
foreach ($funcaoDecode -> clientes as $cliente){
   // print_r($cliente);
    echo $cliente->id . ' - ' . $cliente->nome . ' - ' . $cliente->email .  PHP_EOL;
}
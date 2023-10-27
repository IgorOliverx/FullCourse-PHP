<?php

//função para verificar em uma string seu começo.
//Neste caso eu verifiquei se a url informada começa com 'https://'



$url = 'https://alura.com.br';

if(str_starts_with($url, 'https://')){
    echo "$url é segura" . PHP_EOL;
}else {
    echo "$url não é segura" . PHP_EOL;
} if(str_ends_with($url, '.com.br')){
    echo "$url é de dominio brasileiro" . PHP_EOL;
}else {
    echo "$url não é de dominio brasileiro" . PHP_EOL;
}

var_dump(parse_url($url,PHP_URL_PORT ));
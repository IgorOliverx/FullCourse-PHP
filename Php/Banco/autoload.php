<?php

//Fazendo autoload em php -> carregamento de classes de forma automatica

spl_autoload(function (string $nomeClass){
    $caminhoArquivo = str_replace('src\\', 'src', $nomeClass);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';


    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }

});
<?php


//função que abre arquivo e tem o podeer de manipulação90
$arquivo = fopen('lista.txt', 'r');

//feof -> representa o final do arquivo
//a maior parte das funções que sao abreviadas e começam com 'f' são para manipulação de arquivos e streams


//enquanto o arquivo nao chegar ao fim, exibe-se cada linha
while(!feof($arquivo)){
    $ler = fgets($arquivo);
    echo $ler . PHP_EOL;

}
fclose($arquivo); //economia de recursos -> fechando o arquivo depois que o script rodar
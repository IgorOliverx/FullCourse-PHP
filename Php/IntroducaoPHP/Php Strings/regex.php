<?php

$telefones = ['(11) 92345-1221', "(11) 92345-2121","(11) 92345-2121"];

foreach ($telefones as $telefone){
    //preg_match => verficia se a expressão regular vale para aquilo e armazena o que encontrou da expressão regular
    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4}-[0-9]{4}$/', $telefone, $correspondencia );
    var_dump($correspondencia);
    if($telefoneValido){
        echo "Telefone válido" . PHP_EOL;
    }else{
        echo "Telefone inválido!" . PHP_EOL;
    }

   echo preg_replace('/\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})/', '(XX) \2', $telefone) . PHP_EOL;

//preg_replace é substituição de uma regex
//    regex === expressões regulares
}



$data = '2022-06-08';
echo $data . PHP_EOL;
$dataTransformada = preg_replace('/^([0-9]{4})-([0-9]{2})-([0-9]{2})/', '\3/\2/\1', $data);

echo $dataTransformada;
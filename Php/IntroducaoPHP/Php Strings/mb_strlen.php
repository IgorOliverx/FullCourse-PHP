<?php

$ligar = true;
$senha = '123';


var_dump(strlen($senha));


criarSenha();


//exemplo básico de criação de senha via CLI
function criarSenha()
{
$ligar = true;
$senha1 = readline("Digite uma senha");
    while ($ligar){
    if(mb_strlen($senha1)<8){
        echo "Senha inválida. Tente novamente!";
        $ligar = false;
        criarSenha();
    }else {
    echo "Senha segura!";
    break;
}
}
}
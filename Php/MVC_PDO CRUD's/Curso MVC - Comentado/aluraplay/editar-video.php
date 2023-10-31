<?php

$db = __DIR__ . '/banco.sqlite';
$pdo = new PDO("sqlite:$db");

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if($id === false) {
    header('Location: /listagem-videos.php?sucesso=0');
    exit();
}


//extraindo as variavelis dos verbos post para tratamento de validação -> laravel ja faz isso automaticamente
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);// fiz um filtro da url para verificar com metodos nativos se ela é verdadeira ou não
//a função filter_var faz o mesmo, mas para variaveis
if($url === false){
    header('Location: /?sucesso=0');//mando o user para a home
    exit();//interrompo a execução do programa
}


$titulo = filter_input(INPUT_POST, 'titulo');
if($titulo === false){
    header('Location: /?sucesso=0');//mando o user para a home
    exit();//interrompo a execução do programa
}

$sql = 'UPDATE videos SET url = :url, title = :title WHERE id = :id;'; //prepara uma instrução de update
$stmt = $pdo->prepare($sql); // prepara o statement
$stmt->bindValue(':url', $url); //parametros -> proteção contra sql injection
$stmt->bindValue(':title', $titulo); //parametros -> proteção contra sql injection
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //parametros -> proteção contra sql injection

//executa o stmt -> consequentemente a instrução sql com uma verificação
if ($stmt->execute() === false) {
    //cabecalho http que o navegador processa
    header('Location: /?sucesso=0');
}else {
    header('Location: /?sucesso=1');
}


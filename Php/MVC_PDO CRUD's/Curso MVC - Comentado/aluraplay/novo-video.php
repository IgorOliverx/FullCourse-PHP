<?php
//definindo a variavel de onde se encontra o banco
$db = __DIR__ . '/banco.sqlite';
//instancia do pdo -> classe de manipulação
$pdo = new PDO("sqlite:$db");

//extraindo as variavelis dos verbos post para tratamento de validação -> laravel ja faz isso automaticamente
$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);// fiz um filtro da url para verificar com metodos nativos se ela é verdadeira ou não
//a função filter_var faz o mesmo, mas para variaveis
if($url === false){
    header('Location: /index.php?sucesso=0');//mando o user para a home
    exit();//interrompo a execução do programa
}
$titulo = filter_input(INPUT_POST, 'titulo');
if($titulo === false){
    header('Location: /index.php?sucesso=0');//mando o user para a home
    exit();//interrompo a execução do programa
}

//instrução sql
$sql = 'INSERT INTO videos (url, title) VALUES (?, ?);';
//definindo um statement de preparação da minha instrução -> importante prevenir contra sql injection
$stmt = $pdo->prepare($sql);
$stmt ->bindValue(1, $url );//usando superglobais de forma simples para a instrução sql
$stmt -> bindValue(2, $titulo );


//executa o stmt -> consequentemente a instrução sql com uma verificação
    if($stmt ->execute() === false){
        //cabecalho http que o navegador processa
        header('Location: /index.php?sucesso=0');
    }
    header('Location: /index.php?sucesso=1');






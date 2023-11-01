<?php
//definindo a variavel de onde se encontra o banco
use Alura\Mvc\Entity\Video;

$db = __DIR__ . '/banco.sqlite';
//instancia do pdo -> classe de manipulação
$pdo = new PDO("sqlite:$db");

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

$repository = new \Alura\Mvc\Repository\VideoRepository($pdo);

//executa o stmt -> consequentemente a instrução sql com uma verificação
    if($repository->addVideo(new Video($url, $titulo))=== false){
        //cabecalho http que o navegador processa
        header('Location: /?sucesso=0');
    }
    header('Location: /?sucesso=1');






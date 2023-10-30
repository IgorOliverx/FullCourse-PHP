<?php
global $conexao;
//PDO -> PHP Data Objects
//Classe de manipulação de BD com inúmeros métodos muitos bons
try {
    //Instância de um objeto da classe PDO
    $conexao = new PDO("mysql:host=127.0.0.1; dbname=crudsimples", "root", "");
    //método que controla erros. Fornece relatorios e recebe o errmode exception como parametro
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//doc:https://www.php.net/manual/pt_BR/pdo.setattribute.php
    //método exec é usado para executar uma única instrução SQL -> frequentemente usado para instruções que nao tem resultados diretos
    //nesse caso, ele define o conjunto de caracteres aceitos pelo Banco de Dados. Opadrao utf-8 aceita acentos e caracteres especiais
    $conexao->exec("set names utf8");//doc:https://www.php.net/manual/pt_BR/pdo.exec.php
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
?>
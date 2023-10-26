<?php

require_once 'vendor/autoload.php';



//3 parametros
$pdo = \Alura\Pdo\Infrastructure\Persistence\FabricaDeConexao::criarConexao(); //utilizando principiops da orientação a objetos

$student = new \Alura\Pdo\Domain\Model\Student(
    null,
    'Marina Ruy Barbosa',
    new DateTimeImmutable('2005-10-06')
);

//inserindo dados numa tabela. Preparando, verificando e executando
$sqlInsert = "INSERT INTO students2 (name, birth_date) VALUES (:name, :birth_date)";

$statement = $pdo->prepare($sqlInsert);//preparando a instrução para add infos
$statement->bindValue(1, $student->name());//definindo um parametro pra tal coluna ou linha
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));//definindo um parametro pra tal coluna ou linha

//verificacao simples de execução concluida ou nao
if($statement->execute()){
    echo "Aluno incluído!";
}else{
echo "Erro de conexao";
}
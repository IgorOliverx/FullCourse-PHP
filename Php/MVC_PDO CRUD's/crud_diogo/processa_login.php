<?php
require_once ('conectaBD.php');
global $conexao;

// Verificar se está chegando dados por POST -> se chegar algo abre a instrução
if (!empty($_POST)) {
// Iniciar SESSAO (session_start)
    session_start();
    try {
// Montar a SQL
        $sql = "SELECT nome, email, telefone, data_nascimento FROM usuario WHERE email =
:email AND senha = :senha";
// Preparar a SQL (pdo)
        $stmt = $conexao->prepare($sql);
// Definir/Organizar os dados p/ SQL -> fez isso para add criptografia e veerificações também
        $dados = array(
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['senha'])
        );

        $stmt->execute($dados); //Poderia oferecer BindParam ou array para passar conjunto de valor da preparação acima, linha 11 e 14

        $result = $stmt->fetchAll(); // retorna os resultados da consulta em um array associativo

                //iniciando verificação de resultados
        if ($stmt->rowCount() == 1) { // Se o resultado da consulta SQL trouxer um registro
                // Autenticação foi realizada com sucesso
            $result = $result[0];
                // Definir as variáveis de sessão usando a superglobal session e atribuindo a chave associativa do array
            $_SESSION['nome'] = $result['nome'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['data_nascimento'] = $result['data_nascimento'];
            $_SESSION['telefone'] = $result['telefone'];
                //A superglobal $_SESSION é usada para armazenar informações que precisam ser preservadas entre diferentes requisições do usuário ao longo de sua sessão no aplicativo web. Em PHP, as sessões são uma maneira de manter dados do usuário entre as requisições, geralmente usando cookies para identificar o usuário.
                // Redirecionar p/ página inicial (ambiente logado)
            header("Location: index_logado.php");
        } else {
                // Signifca que o resultado da consulta SQL não trouxe nenhum registro
                // Falha na autenticaçao
                // Destruir a SESSAO
            session_destroy();
                // Redirecionar p/ página inicial (login)
            header("Location: listagem-videos.php?msgErro=E-mail e/ou Senha inválido(s).");
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
else {
    header("Location: listagem-videos.php?msgErro=Você não tem permissão para acessar esta página..");
}
die();
?>
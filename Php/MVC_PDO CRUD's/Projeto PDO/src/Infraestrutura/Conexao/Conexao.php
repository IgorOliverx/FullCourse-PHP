<?php

class Conexao
{
    public static function criarConexao():\PDO
    {
        try{
            $caminhoBanco = __DIR__ . '/../../../banco.sqlite';
            $conexao = new PDO("sqlite:$caminhoBanco");
            $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conexao;

        }catch(PDOException $e){
            return $e->getMessage();
        }

    }

}
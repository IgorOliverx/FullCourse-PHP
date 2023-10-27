<?php

class Cadastro
{
    private string $nome;
    private string $sobrenome;
    private string $email;
    private string $cpf;

    /**
     * @param string $nome
     * @param string $sobrenome
     * @param string $email
     * @param string $cpf
     */
    public function __construct(string $nome, string $sobrenome, string $email, string $cpf)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }



}
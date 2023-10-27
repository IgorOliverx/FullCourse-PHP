<?php


interface CadastroRepositorio
{
    public function cadastrarUser(): bool;

    public function buscarUser(): array;
}
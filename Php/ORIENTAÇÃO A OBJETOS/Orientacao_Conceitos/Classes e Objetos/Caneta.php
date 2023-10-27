<?php
class Caneta
{
    //Características -> atributos
    public string $marca;
    public string $cor;
    public string $espessuraPonta;
    public float $preco;


    //Funcionalidades

    public function escrever(){
        echo 'Estou escrevendo';
    }

    public function rabiscar(){
        echo 'estou rabiscando!';
    }
}
<?php

namespace Novidade_PHP8;

//Promoção de parametros no PHP 8.1
//ao invés de ter de declarar o atributo varias vezes, posso defini-as somente usando o construtor -> inibe o uso de getter and setter em alguns casos

class Carro
{
    public function __construct(public string $nome, public string $zesi)
    {
        //Para usufruir disto, tenho que passar o escopo da variavel dentro do construtor!
    }
}


//Observe que são poucas linhas de codigo, sendo que, seria antigamente feito assim:
class Carrin{

    public string $marca;
    public string $modelo;
    public function __construct(string $modelo, string $marca)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

}



//As duas classes estão IGUAIS e REALIZAM AS MESMAS FUNÇÕES.
//Escrevi menos linhas de codigo para realizar as mesmas tarefas. Lembre-se que este é um caso simples,
// em aplicações verdadeiras podem ser necessários o uso de regras de negócio em getters e setters
$audi = new Carro('Audi TT', 'Vermelho');
$audi -> nome = 'Audi Lamborghini';
var_dump($audi);

$bmw = new Carrin('BMW I8', 'bmw');
$bmw ->setModelo('bmw ferrari');
var_dump($bmw);
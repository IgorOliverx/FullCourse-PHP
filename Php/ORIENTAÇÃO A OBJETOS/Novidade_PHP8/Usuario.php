<?php

namespace Novidade_PHP8;

//A nova propriedade RFC tem as seguintes características:
//1.° - Ela faz com que atributos do construtor possam ser modificados 1 única vez;
//2.° - definimos seu escopo como Public
//3.° - Elimina a necessidade de criar métodos setters e também getter, pois como "public" posso ACESSAR
//4.° - Os paramêtros so podem ser DEFINIDOS(não acessados) por métodos da classe, por isso o "Public"
//5.° - Não é possível informar diretamente o seu valor, pois assim se tornaria uma constante, perdendo a necessidade de existir
//6.° - É permitido alterar o valor da classe e não de referências!
//7.° - Só consigo usar READONLY em variáveis tipadas
class Usuario
{
    public function __construct(public readonly string $user , public readonly string $senha)
    {

    }

//    public function getUser(): string
//    {
//        return $this->user;
//    }
//
//    public function getSenha(): string
//    {
//        return $this->senha;
//    }
//
////    public function setSenha(string $senha): void
////    {
////        $this->senha = $senha;
////    }

}

$user = new Usuario('iguito', 'Palmeiras186');
//Observe o erro abaixo --> tire as "" e veja o erro readonly
//echo $user->user = 'Igor';

var_dump($user);
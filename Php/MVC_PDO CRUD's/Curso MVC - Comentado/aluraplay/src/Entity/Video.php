<?php

namespace Alura\Mvc\Entity;

use http\Exception\InvalidArgumentException;

class Video
{
    public readonly int $id;
    public readonly string $url;//readonly significa que é uma constante. Igual a final no java
    //Utilizando promoção de atributos -> a partir do php 8.0(não preciso declarar o atributo antes, basta declarar no construtor)
    public function __construct(string $url, public readonly string $title)
    {
        $this->setUrl($url);
        $this->setTitle($this->title);

    }

    private function setUrl(string $url):void
    {
        if(filter_var($url, FILTER_VALIDATE_URL) === false){
            throw new InvalidArgumentException();
        }

        $this->url = $url;
    }

    private function setTitle(string $title):void
    {

    }

    public function setId(int $id):void
    {
        $this->id = $id;
    }
}
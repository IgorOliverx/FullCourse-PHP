<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

//a interface serve para diferenciar o metodo de processaRequisicao de cada controller
interface Controller
{
    public function processaRequisicao(): void;
}

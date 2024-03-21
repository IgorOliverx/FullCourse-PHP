<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerServicos extends Controller
{
    /**
     * Controller com uma única ação. Denominado como Single Action
     */
    public function __invoke($codigo = null)
    {
        //O método mágico invoke serve para invocar uma função de uso único, mas modular e que pode ser reutilizado
        //Não preciso também passar o método no arquivo de routes.php
        if(!$codigo){
            echo 'Serviço não encontrado!';
            return;
        }

        $servicos = [
            'php' => 'Detalhes do servico de php',
            'devops' => 'Detalhes do serviço de devops',
            'front-end' => 'Detalhes do serviço de front end'
        ];

            $descricaoServicos = $servicos[$codigo];

            echo $descricaoServicos;
    }
}

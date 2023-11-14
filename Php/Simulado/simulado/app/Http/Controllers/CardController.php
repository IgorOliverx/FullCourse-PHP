<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{

    public function gerarCards()
    {
        //função para fazer isso com todos os componentes
    }

    public function card()
    {
        //acessando o caminho do arquivo json
        $data = file_get_contents(public_path('midias/machines.json'));
        // Decodifique o JSON
        $json = json_decode($data, true);

        //procurando a url das imagens com o asset
        foreach ($json as &$item) {
            $item['imageUrl'] = asset("midias/images/{$item['imageUrl']}.png");
        }

        //retornando a view passando o array associativo
        return view('componentes', ['data' => $json]);
    }

}

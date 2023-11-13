<?php

namespace App\Http\Controllers;

use App\Models\GraphicCard;
use Illuminate\Http\Request;

class GraphicCardController extends Controller
{
    public function index( )
    {
        $graphicCard = GraphicCard::all();

        return response()->json(['graphiccard' => $graphicCard]);
    }

    public function card()
    {
        //acessando o caminho do arquivo json
        $data = file_get_contents(public_path('midias/graphicCards.json'));
        // Decodifique o JSON
        $json = json_decode($data, true);

        //procurando a url das imagens com o asset
        foreach ($json as &$item) {
            $item['imageUrl'] = asset("midias/images/{$item['imageUrl']}.png");
        }

        //dd($json);
        //retornando a view passando o array associativo
        return view('graphiccard', ['data' => $json]);
    }

}

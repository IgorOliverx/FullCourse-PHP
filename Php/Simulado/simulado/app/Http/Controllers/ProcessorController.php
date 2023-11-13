<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class ProcessorController extends Controller
{
    public function index()
    {
        $processor = Processor::all();

        return response()->json(['processor' => $processor]);
    }


    //o certo deveria ser tratar o json como um objeto de instancia do modelo do controller. Teria problemas de manipulação por nao saber usar as funções corretas
    public function card()
    {
        //acessando o caminho do arquivo JSON dos processadores
        $data = file_get_contents(public_path('midias/processors.json'));
        //decodificando o JSON dos processadores
        $processors = json_decode($data, true);

        //mesma coiusa q o de cima
        $brandsData = file_get_contents(public_path('midias/brands.json'));
        $brands = json_decode($brandsData, true);

        $socketTypeID = file_get_contents(public_path('midias/socketTypes.json'));
        $sockets = json_decode($socketTypeID, true);



        foreach ($processors as &$processor) {
            // Encontrando a marca correspondente pelo ID
            $brandId = $processor['brandId'];
            // procurando a marca pelo seu id
            $brand = collect($brands)->firstWhere('id', $brandId);
            //adicionando a marca ao processador
            $processor['brand'] = $brand['name'];



            $socketId = $processor['socketTypeId'];
            $socket = collect($sockets)->firstWhere('id', $socketId);
            $processor['socket'] = $socket['name'];


            //URL da imagem usando a function asset
            $processor['imageUrl'] = asset("midias/images/{$processor['imageUrl']}.png");
        }

        //retorno  da view passando o array assoc

        //LEMBRE-SE DE USAR O DEBUGGING -> É CRUCIAL

        //dd($processor);
        //dd($processors);

        return view('processor', ['processors' => $processors]);
    }

}

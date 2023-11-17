<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function card()
    {
        //acessando o caminho do arquivo json
        $data = file_get_contents(public_path('midias/machines.json'));
        // Decodifique o JSON
        $machines = json_decode($data, true);


        $placaMaeArquivo = file_get_contents(public_path('midias/motherboards.json'));
        $placasMae = json_decode($placaMaeArquivo, true);

        $processadorArquivo = file_get_contents(public_path('midias/processors.json'));
        $processadores = json_decode($processadorArquivo, true);

        $memoriaArquivo = file_get_contents(public_path('midias/ramMemories.json'));
        $memorias = json_decode($memoriaArquivo, true);

        $placaVideoArquivo = file_get_contents(public_path('midias/graphicCards.json'));
        $placasDeVideo = json_decode($placaVideoArquivo, true);

//        $armazenamentoArquivo = file_get_contents(public_path('midias/storageDevices.json'));
//        $armazenamentos = json_decode($armazenamentoArquivo, true);

        $fontesArquivo = file_get_contents(public_path('midias/powerSupplies.json'));
        $fontes = json_decode($fontesArquivo, true);

        //procurando a url das imagens com o asset
        foreach ($machines as &$machine) {
            $machine['imageUrl'] = asset("midias/images/{$machine['imageUrl']}.png");


            $placaId =$machine['motherboardId'];
            $placa = collect($placasMae)->firstWhere('id', $placaId);
            $machine['motherboard'] = $placa['name'];

            $processorId = $machine['processorId'];
            $processador = collect($processadores)->firstWhere('id', $processorId);
            $machine['processor'] = $processador['name'];

            $memoriaId = $machine['ramMemoryId'];
            $memoria = collect($memorias)->firstWhere('id', $memoriaId);
            $machine['memoryRam'] = $memoria['name'];

            $placaVideoId = $machine['graphicCardId'];
            $placaDeVideo = collect($placasDeVideo)->firstWhere('id', $placaVideoId);
            $machine['placaVideo'] = $placaDeVideo['name'];

            $fontesId = $machine['powerSupplyId'];
            $fonte = collect($fontes)->firstWhere('id', $fontesId);
            $machine['fonte'] = $fonte['name'];


        }
        //dd($machines);
        //retornando a view passando o array associativo
        return view('machines', ['machines' => $machines]);
    }

    public function index()
    {

    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }

}

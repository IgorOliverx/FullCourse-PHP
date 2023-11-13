<?php

namespace App\Http\Controllers;

use App\Models\MotherBoard;
use Illuminate\Http\Request;

class MotherBoardController extends Controller
{
    public function index( )
    {
        $motherBoard = MotherBoard::all();

        return response()->json(['motherboard' => $motherBoard]);
    }

    public function card()
    {
        //acessando o caminho do arquivo json
        $data = file_get_contents(public_path('midias/motherboards.json'));
        // Decodifique o JSON
        $motherboards = json_decode($data, true);


        //mesma coiusa q o de cima
        $brandsData = file_get_contents(public_path('midias/brands.json'));
        $brands = json_decode($brandsData, true);

        //mesma coiusa q o de cima
        $socketTypeID = file_get_contents(public_path('midias/socketTypes.json'));
        $sockets = json_decode($socketTypeID, true);

        $ramTypeId= file_get_contents(public_path('midias/ramMemoryTypes.json'));
        $memorys = json_decode($ramTypeId, true);



        //procurando a url das imagens com o asset
        foreach ($motherboards as &$motherboard) {
            //buscando a imagem
            $motherboard['imageUrl'] = asset("midias/images/{$motherboard['imageUrl']}.png");

            //buscando a marca (tudo explicado no controller do processador)
            $brandId = $motherboard['brandId'];
            $brand = collect($brands)->firstWhere('id', $brandId);
            $motherboard['brand'] = $brand['name'];


            $socketId =$motherboard['socketTypeId'];
            $socket = collect($sockets)->firstWhere('id', $socketId);
            $motherboard['socket'] = $socket['name'];

            $ramId = $motherboard['ramMemoryTypeId'];
            $memory = collect($memorys)->firstWhere('id', $ramId);
            $motherboard['memoryRam'] = $memory['name'];
        }

        //dd($motherboard);
        //retornando a view passando o array associativo
        return view('motherboard', ['motherboards' => $motherboards]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\RamMemory;
use Illuminate\Http\Request;

class RamMemoryController extends Controller
{
    public function index()
    {
        $ramMemory = RamMemory::all();

        return response()->json(['rammemory' => $ramMemory]);
    }

    public function card()
    {
        //acessando o caminho do arquivo json
        $data = file_get_contents(public_path('midias/ramMemories.json'));
        // Decodifique o JSON
        $json = json_decode($data, true);

        //mesma coiusa q o de cima
        $brandsData = file_get_contents(public_path('midias/brands.json'));
        $brands = json_decode($brandsData, true);

        $ramTypeId= file_get_contents(public_path('midias/ramMemoryTypes.json'));
        $memorys = json_decode($ramTypeId, true);


        //procurando a url das imagens com o asset
        foreach ($json as &$item) {
            $item['imageUrl'] = asset("midias/images/{$item['imageUrl']}.png");

            $brandId = $item['brandId'];
            $brand = collect($brands)->firstWhere('id', $brandId);
            $item['brand'] = $brand['name'];

            $ramId = $item['ramMemoryTypeId'];
            $memory = collect($memorys)->firstWhere('id', $ramId);
            $item['memoryRam'] = $memory['name'];



        }

        //retornando a view passando o array associativo
        return view('rammemory', ['json' => $json]);
    }
}

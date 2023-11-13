<?php

namespace App\Http\Controllers;

use App\Models\PowerSupply;
use Illuminate\Http\Request;

class PowerSupplyController extends Controller
{
    public function index()
    {
        $power = PowerSupply::all();

        return response()->json(['powersupply' => $power]);
    }

    public function card()
    {
        //acessando o caminho do arquivo json
        $data = file_get_contents(public_path('midias/powerSupplies.json'));
        // Decodifique o JSON
        $json = json_decode($data, true);


        $brandsData = file_get_contents(public_path('midias/brands.json'));
        $brands = json_decode($brandsData, true);

        //procurando a url das imagens com o asset
        foreach ($json as &$item) {
            $item['imageUrl'] = asset("midias/images/{$item['imageUrl']}.png");

            //buscando a marca (tudo explicado no controller do processador)
            $brandId = $item['brandId'];
            $brand = collect($brands)->firstWhere('id', $brandId);
            $item['brand'] = $brand['name'];
        }

        //retornando a view passando o array associativo
        return view('powersupply', ['data' => $json]);
    }
}

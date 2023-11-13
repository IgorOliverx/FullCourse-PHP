<?php

namespace App\Http\Controllers;

use App\Models\StorageDevice;
use Illuminate\Http\Request;

class StorageDeviceController extends Controller
{
    public function index()
    {
        $storageDevice = StorageDevice::all();

        return response()->json(['storagedevice' => $storageDevice]);
    }
    public function card()
    {
        //acessando o caminho do arquivo json
        $data = file_get_contents(public_path('midias/storageDevices.json'));
        // Decodifique o JSON
        $json = json_decode($data, true);


        //mesma coiusa q o de cima
        $brandsData = file_get_contents(public_path('midias/brands.json'));
        $brands = json_decode($brandsData, true);



        foreach ($json as &$item) {
            $item['imageUrl'] = asset("midias/images/{$item['imageUrl']}.png");

            //buscando a marca (tudo explicado no controller do processador)
            $brandId = $item['brandId'];
            $brand = collect($brands)->firstWhere('id', $brandId);
            $item['brand'] = $brand['name'];
        }

        //retornando a view passando o array associativo
        return view('storagedevice', ['json' => $json]);
    }
}

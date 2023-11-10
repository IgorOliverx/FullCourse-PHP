<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageDeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arquivo = public_path('midias/storageDevices.json');
        $dados = json_decode(file_get_contents($arquivo), true);

        foreach ($dados as $item){
            DB::table('storagedevice')->insert($item);
        }
    }
}

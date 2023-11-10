<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arquivo = public_path('midias/socketTypes.json');
        $dados = json_decode(file_get_contents($arquivo), true);

        foreach ($dados as $item){
            DB::table('sockettype')->insert($item);
        }
    }
}

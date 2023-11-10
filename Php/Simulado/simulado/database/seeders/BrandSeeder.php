<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //aqui é simples. Só decodifiquei o arquivo json
        $arquivo = public_path('midias/brands.json');
        $dados = json_decode(file_get_contents($arquivo), true);
        //percorri todos os dados do json
        foreach ($dados as $item){
            //com o facade eu chamo a classe DB, o metodo static table(nome da table)->insert(arquivo json)
            DB::table('brand')->insert($item);
        }
    }
}

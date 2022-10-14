<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            [
                'imagem' => null,
                'nome_produto' => 'Água mineral',
                'tipo' => 'Da fonte',
                'preco' => 4.99,
                'quantidade'=> 100,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'imagem' => null,
                'nome_produto' => 'Cerveja',
                'tipo' => '600 ml',
                'preco' => 8.99,
                'quantidade'=> 300,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
            [
                'imagem' => null,
                'nome_produto' => 'Refrigerante',
                'tipo' => 'Coca-cola 1L',
                'preco' => 7.50,
                'quantidade'=> 250,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],


            [
                'imagem' => null,
                'nome_produto' => 'PF',
                'tipo' => 'completo',
                'preco' => 20.00,
                'quantidade'=> 'ilimitado',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'imagem' => null,
                'nome_produto' => 'Brigadeiro',
                'tipo' => 'unitário',
                'preco' => 2.00,
                'quantidade'=> 350,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        );
    }
}

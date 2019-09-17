<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \exemplo\Produto::create(["nome" => "Dell xps", "preco" => 1000.90, "categoria_id" => 4]);

        \exemplo\Produto::create(["nome" => "Acer aspire", "preco" => 2000.90, "categoria_id" => 4]);

    }
}

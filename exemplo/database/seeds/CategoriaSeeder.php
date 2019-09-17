<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \exemplo\Categoria::create(["descricao" => "Informática", "categoria_id" => null]);
	\exemplo\Categoria::create(["descricao" => "Livros", "categoria_id" => null]);
	\exemplo\Categoria::create(["descricao" => "Games", "categoria_id" => null]);



        \exemplo\Categoria::create(["descricao" => "Notebooks", "categoria_id" => 1]);
        \exemplo\Categoria::create(["descricao" => "Desktops", "categoria_id" => 1]);

        \exemplo\Categoria::create(["descricao" => "Romances", "categoria_id" => 2]);
        \exemplo\Categoria::create(["descricao" => "Aventura", "categoria_id" => 2]);
        \exemplo\Categoria::create(["descricao" => "Suspence", "categoria_id" => 2]);

    }
}

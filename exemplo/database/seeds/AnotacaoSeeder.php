<?php

use Illuminate\Database\Seeder;

class AnotacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(exemplo\Anotacao::class, 5)->create();
    }
}

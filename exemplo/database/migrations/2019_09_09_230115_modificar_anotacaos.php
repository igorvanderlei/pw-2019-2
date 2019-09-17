<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificarAnotacaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anotacaos', function (Blueprint $table) {
            $table->foreign("usuario_id")->references("id")
     ->on("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anotacaos', function (Blueprint $table) {
            $table->dropForeign("anotacaos_usuario_id_foreign");
        });
    }
}

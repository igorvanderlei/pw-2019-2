<?php

namespace exemplo;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ["descricao", "categoria_id"];

    function produtos() {
	$this->hasMany("\exemplo\Produto");
    }

    function categorias() {
	$this->hasMany("\exemplo\Categoria");
    }
}

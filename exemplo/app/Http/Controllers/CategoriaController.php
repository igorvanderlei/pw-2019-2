<?php

namespace exemplo\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
  /*  function listarCategoriaRaiz() {
	$lista = \exemplo\Categoria::where("categoria_id", "=", null)->get();
	return view("listarCategorias")->with(["categorias"=> $lista]);
    }*/

    function exibirCategoria($id=null) {
	$lista = \exemplo\Categoria::where("categoria_id", "=", $id)->get();
	return view("listarCategorias")->with(["categorias"=> $lista, "atual" => $id]);
    }

    function cadastrarCategoria(Request $request) {
	\exemplo\Categoria::create($request->all());
	return redirect("exibirCategoria/". $request['categoria_id']);
    }

	function removerCategoria ($id) {
		$categoria = \exemplo\Categoria::find($id);
		$categoria->delete();
		return "removeu aaaaaaaa";
	}

}

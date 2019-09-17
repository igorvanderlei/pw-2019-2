<?php

namespace exemplo\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use exemplo\Anotacao;

class AnotacaoController extends Controller
{
    function listarAnotacoes() {
	$lista = \exemplo\Anotacao::all();
//	var_dump($lista);
	return view("listarAnotacoes")->with([
						"anotacoes" => $lista
					     ]);
    }

    function adicionarAnotacao(Request $request) {
//	var_dump($request);
	$anotacao = \exemplo\Anotacao::create($request->all());
//	$anotacao->status = false;
//	$anotacao->texto = $request["texto"];
//	$anotacao->save();

	return redirect("/anotacoes/listar");
    }


}

<?php

namespace exemplo\Http\Controllers;

use Illuminate\Http\Request;
use exemplo\Tabuada;

class Teste extends Controller
{
    function sayHello($nome="") {
	echo "Hello, $nome";
    }

    function calcular(Request $request, $valor=0) {
	$tabuada = new Tabuada($request['valor']);
	return view('tabuada2')->with('tab', $tabuada);

    }
}

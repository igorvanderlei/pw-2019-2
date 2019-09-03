<?php

namespace exemplo\Http\Controllers;

use Illuminate\Http\Request;
use exemplo\Tabuada;

class TabuadaController extends Controller
{
  	function calcular(Request $request, $valor=0) {
		$tabuada = new Tabuada($request['valor']);
		return view("tabuada")->with("tabuada", $tabuada);
		
		  	
  	}
}

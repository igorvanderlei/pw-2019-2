<!DOCTYPE html>
<html>	
	<head>
	
	</head>
	<body>
	
	<h1>Tabuada de {{ $tabuada->getBase() }}</h1>
	<ul>
	@foreach(array_keys($tabuada->getResultados()) as $num)
		<li>{{ $num }} * {{$tabuada->getBase()}} = {{ $tabuada->getResultados()[$num] }}</li>
	@endforeach
	</ul>
	
	<form action="{{ route('tabuada') }}" method="get" >
		@csrf
		<input type="text" name="valor"/>
		<input type="submit" value="Calcular" />
	</form>
	
	</body>
	
		
	

</html>
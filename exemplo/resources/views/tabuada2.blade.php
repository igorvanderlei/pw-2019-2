<!DOCTYPE html>

<html>
<head>

</head>
<body>
	<h1>Tabuada de {{ $tab->getBase()  }}</h1>
	
	<ul>
		@foreach(array_keys($tab->getResultados()) as $t)
			<li>{{$t}} * {{$tab->getBase() }} = 
			{{ $tab->getResultados()[$t]}}</li>	
		@endforeach
	
	</ul>	
	
	<form action="/tabuada" method="post">
		@csrf
		<input type="text" name="valor"/>
		<input type="submit" value="Calcular" />	
	
	</form>
	
	
</body>
</html>
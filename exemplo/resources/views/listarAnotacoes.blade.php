<!DOCTYPE html>
<html>	
	<head>
	
	</head>
	<body>
	
	<h1>Lista de Anotações</h1>

	@foreach($anotacoes as $anotacao)
		{{ $anotacao->id }} {{ $anotacao->texto }}<br>

	@endforeach

	<form method="post" action="/anotacoes/adicionar" >
		@csrf
		<input type="text" name="texto">
		<input type="hidden" name="status" value="false">
		<input type="submit" value="adicionar">

	</form>



	
	</body>
	
		
	

</html>

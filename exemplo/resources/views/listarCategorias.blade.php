<!DOCTYPE html>
<html>	
	<head>
	
	</head>
	<body>
	
	<h1>Organizações Tabajara</h1>

	@foreach($categorias as $categoria)
	<a href="/exibirCategoria/{{ $categoria->id }}">	{{ $categoria->id }} {{ $categoria->descricao }}</a>
	<a href="/removerCategoria/{{ $categoria->id }}">Remover</a>
<br>

	@endforeach

	<form action="/adicionarCategoria" method="post">
		@csrf
		Descrição: <input type="texto" name="descricao" />
		<input type="hidden"  name="categoria_id" value="{{$atual}}"/>
		<input type="submit" value="cadastrar" />


	</form>


	
	</body>
	
		
	

</html>

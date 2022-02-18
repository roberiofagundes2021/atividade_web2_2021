@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')






<body>
	
	
	<form action="{{route('marca.update', ['id' => $Marcas->id])}}
" method="post">
		<div>
			<h1>edição de marca</h1><br>
			{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		

		<label for="nome">nome da categoria</label>
		{{-- Form Section 1 --}}
		<label>nome da marca</label><br>
		<input type="text" name="nome" value="{{$Marcas->nome}}"><br><br>
	
	
		<input type="submit" class="button" value="editar">
		</div>
		

	</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')
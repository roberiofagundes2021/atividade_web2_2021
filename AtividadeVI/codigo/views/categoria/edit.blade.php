
@extends('layouts.main')

@section('titulo','Sistema de Venda')


@section('conteudo')

<body>
	
<form action="{{route('categoria.update', ['id' => $categoria->id])}}" method="post">

	<div>
		<h4>Edição de categoria</h4><br>
		@csrf
		@method('PUT')
		
			<label for="nome">nome da categoria</label>
		{{-- Form Section 1 --}}
		<input type="text" name="nome" value="{{$categoria->nome}}">

		<input type="submit" value="editar">
		
	</div>
		
		
			
		
		

	</form>





</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')
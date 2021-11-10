@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')




<h1>edição de fornecedor</h1>

<body>
	
	
	<form action="{{route('fornecedors.update', ['id' => $Fornecedors->id])}}
" method="post">

		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		

		<label for="nome">nome da categoria</label>
		{{-- Form Section 1 --}}
		<label>razao social</label>
		<input type="text" name="razaosocial" value="{{$Fornecedors->razaosocial}}">
		<label>cnpj</label>
		<input type="text" name="cnpj" value="{{$Fornecedors->cnpj}}">
		
		<input type="submit" class="button" value="editar">

	</form>

@endsection('conteudo')
@section('footer')

@endsection('footer')
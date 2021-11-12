@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')




<body>
	
		
	<form action="{{route('itensVenda.update', ['id' => $Itens_Vendas->id])}}
" method="post">
	<div class="row g-3">
 		<div class="col">

		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		

		
		{{-- Form Section 1 --}}
		<label>preco de compra</label>
		<input class="form-control" type="text" name="quantidade_itens" value="{{$Itens_Vendas->quantidade_itens}}">
		
		<label>desconto</label>
		<input class="form-control" type="text" name="desconto" value="{{$Itens_Vendas->desconto}}">
		
		<label>valor</label>
		<input class="form-control" type="text" name="valor" value="{{$Itens_Vendas->valor}}"><br><br>
		
	
		<input type="submit" class="btn btn-primary" value="editar">

	</form>


	</div>
</div>
	
@endsection('conteudo')
@section('footer')

@endsection('footer')
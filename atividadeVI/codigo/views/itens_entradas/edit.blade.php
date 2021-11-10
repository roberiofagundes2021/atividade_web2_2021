@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')





<body>
	
	
	<form action="{{route('itensentradas.update', ['id' => $ItensEntradas->id])}}
" method="post">

		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		
		<div id="col">
		<h4>Edição de itens entradas</h4><br>
			
		{{-- Form Section 1 --}}
		<label>preco de compra</label>
		<input type="text" name="precocompra" value="{{$ItensEntradas->precocompra}}">
		
		<label>quantidade</label>
		<input type="text" name="quantidade" value="{{$ItensEntradas->quantidade}}">
		
		<label>unidade</label>
		<input type="text" name="unidade" value="{{$ItensEntradas->unidade}}"><br><br>
		
		<label>ipi</label>
		<input type="text" name="ipi" value="{{$ItensEntradas->ipi}}">
		
		<label>frete</label>
		<input type="text" name="frete" value="{{$ItensEntradas->frete}}">
		
		<label>icms</label>
		<input type="text" name="icms" value="{{$ItensEntradas->icms}}"><br><br>
		<input type="submit" class="button" value="editar">

		</div>
		
	</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')
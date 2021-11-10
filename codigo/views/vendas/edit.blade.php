@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')



<body>
	

	<form action="{{route('vendas.update', ['id' => $Vendas->id])}}
" method="post">

		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		<div>
			<h4>Edição de venda</h4><br>
			@csrf
		@method('PUT')
		

	
		<label>data_venda</label>
		<input type="text" name="data_venda" value="{{$Vendas->data_venda}}">
		
		<label>valor total</label>
		<input type="text" name="valortotal" value="{{$Vendas->valortotal}}"><br><br>
		
		<label>desconto total</label>
		<input type="text" name="descontototal" value="{{$Vendas->descontototal}}">

		<label>desconto acerto</label>
		<input type="text" name="descontoacerto" value="{{$Vendas->descontoacerto}}"><br><br>

		<input type="submit" class="button" value="editar">

		</div>
		
	</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')
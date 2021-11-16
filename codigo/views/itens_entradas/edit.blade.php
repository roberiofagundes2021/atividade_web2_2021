@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')





<body>
	
	
	<form action="{{route('itensentradas.update', ['id' => $ItensEntradas->id])}}
" method="post">
		<div class="row g-3">
			<h4>Edição de itens entradas</h4><br>
			<div class="col">

				{{--  entradas.update vem da rota update do name --}}
				{{--  a variavel $Entrada vem do controller no metodo edit --}}
				
				@csrf
				@method('PUT')
				
				
				
					
				{{-- Form Section 1 --}}
				<label>preco de compra</label>
				<input type="text" class="form-control" name="precocompra" value="{{$ItensEntradas->precocompra}}">
				
				<label>quantidade</label>
				<input type="text" class="form-control" name="quantidade" value="{{$ItensEntradas->quantidade}}">
				
				<label>unidade</label>
				<input type="text" class="form-control" name="unidade" value="{{$ItensEntradas->unidade}}"><br><br>
				<input type="submit" class="btn btn-primary" value="editar">	
			</div>
			<div class="col">
					<label>ipi</label>
					<input type="text" class="form-control" name="ipi" value="{{$ItensEntradas->ipi}}">
					
					<label>frete</label>
					<input type="text" class="form-control" name="frete" value="{{$ItensEntradas->frete}}">
					
					<label>icms</label>
					<input type="text" name="icms" class="form-control" value="{{$ItensEntradas->icms}}"><br><br>
					
			</div>
		</div>
	</form>
	


@endsection('conteudo')
@section('footer')

@endsection('footer')
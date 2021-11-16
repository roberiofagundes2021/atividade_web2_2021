@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')



	<div class="row g-3">
		<div class="col">
			<form action="{{route('entradas.update', ['id' => $Entrada->id])}}
" method="post">
		<h4>edição de entradas</h4>
		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		

		{{-- Form Section 1 --}}
		<label>valor total da nota</label>
		<input type="text" name="valortotaldanota" class="form-control" value="{{$Entrada->valortotaldanota}}">
		<label>data da entrada</label>
		<input type="text" name="dataentrada" class="form-control" value="{{$Entrada->dataentrada}}">
		<label>fornecedor</label>
		<input type="text" name="fornecedor_id" class="form-control" value="{{$Entrada->fornecedor_id}}"><br>

		<input type="submit" class="btn btn-primary" value="editar">
			

		

		</form>

		</div>
	</div><br>
	

@endsection('conteudo')
@section('footer')

@endsection('footer')
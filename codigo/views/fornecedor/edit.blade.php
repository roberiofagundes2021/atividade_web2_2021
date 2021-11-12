@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')






<div class="row g-3">
    <div class="col">
    	<h4>edição de fornecedor</h4>
    		<form action="{{route('fornecedors.update', ['id' => $Fornecedors->id])}}
" method="post">

				{{--  entradas.update vem da rota update do name --}}
				{{--  a variavel $Entrada vem do controller no metodo edit --}}
			
				@csrf
				@method('PUT')
				{{-- Form Section 1 --}}
				<label>razao social</label>
				<input type="text" class="form-control" name="razaosocial" value="{{$Fornecedors->razaosocial}}">
				<label>cnpj</label>
				<input type="text" class="form-control" name="cnpj" value="{{$Fornecedors->cnpj}}"><br>
					
				<input type="submit" class="btn btn-primary" value="editar">

			</form>
 	</div>
</div><br>
	
	
	

@endsection('conteudo')
@section('footer')

@endsection('footer')
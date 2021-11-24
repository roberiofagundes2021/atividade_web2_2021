@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')



	
	<form action="{{route('produto.update', ['id' => $Produtos->id])}}
" method="post">
		<div class="row g-3">
			<h4>Edição de produto</h4>
			<div class="col">
				{{--  entradas.update vem da rota update do name --}}
				{{--  a variavel $Entrada vem do controller no metodo edit --}}
				
				@csrf
				@method('PUT')
				
				{{-- Form Section 1 --}}
				
					<label>nome</label><br>
				<input type="text" class="form-control" name="nome" value="{{$Produtos->nome}}">
				
				<label>icms</label><br>
				<input type="text" class="form-control" name="icms" value="{{$Produtos->icms}}">
				
				<label>ipi</label><br>
				<input type="text" class="form-control" name="ipi" value="{{$Produtos->ipi}}">

				<label>frete</label><br>
				<input type="text" class="form-control" name="frete" value="{{$Produtos->frete}}"><br><br>
				
				<input type="submit" class="btn btn-primary" class="btn btn-primary" value="editar">
			</div><br><br>
			<div class="col">
				<label>valor na fabrica</label><br>
				<input type="text" class="form-control" name="valornafabrica" value="{{$Produtos->valornafabrica}}">

				<label>valor de compra</label><br>
				<input type="text" class="form-control" name="valordecompra" value="{{$Produtos->valordecompra}}">

				<label>lucro</label><br>
				<input type="text" class="form-control" name="lucro" value="{{$Produtos->lucro}}">

				<label>valor da venda</label><br>
				<input type="text" class="form-control" name="valorvenda" value="{{$Produtos->valorvenda}}">
			</div><br><br>
			<div class="col">
				<label>desconto</label><br>
				<input type="text" class="form-control" name="desconto" value="{{$Produtos->desconto}}">

				<label>data de vencimento</label><br>
				<input type="text" class="form-control" name="datavencimento" value="{{$Produtos->datavencimento}}">
			</div>

				
				</div>
		</div>

	</form>


	

@endsection('conteudo')
@section('footer')

@endsection('footer')
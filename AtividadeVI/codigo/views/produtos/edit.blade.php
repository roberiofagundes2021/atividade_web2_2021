@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')


<div>
	<h4>Edição de produto</h4>
	<form action="{{route('produto.update', ['id' => $Produtos->id])}}
" method="post">

		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		
		{{-- Form Section 1 --}}
		<div>
			<label>nome</label>
		<input type="text" name="nome" value="{{$Produtos->nome}}">
		
		<label>icms</label>
		<input type="text" name="icms" value="{{$Produtos->icms}}">
		
		<label>ipi</label>
		<input type="text" name="ipi" value="{{$Produtos->ipi}}">

		<label>frete</label>
		<input type="text" name="frete" value="{{$Produtos->frete}}"><br><br>

		<label>valor na fabrica</label>
		<input type="text" name="valornafabrica" value="{{$Produtos->valornafabrica}}">

		<label>valor de compra</label>
		<input type="text" name="valordecompra" value="{{$Produtos->valordecompra}}">

		<label>lucro</label>
		<input type="text" name="lucro" value="{{$Produtos->lucro}}"><br><br>

		<label>valor da venda</label>
		<input type="text" name="valorvenda" value="{{$Produtos->valorvenda}}">

		<label>desconto</label>
		<input type="text" name="desconto" value="{{$Produtos->desconto}}">

		<label>data de vencimento</label>
		<input type="text" name="datavencimento" value="{{$Produtos->datavencimento}}"><br><br>
		


		<input type="submit" class="button" value="editar">
		</div>
		

	</form>
</div>

	

@endsection('conteudo')
@section('footer')

@endsection('footer')
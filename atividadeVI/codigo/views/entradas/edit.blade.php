@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')





<body>
	
	
	<form action="{{route('entradas.update', ['id' => $Entrada->id])}}
" method="post">
		<div>
			<h4>edição de entradas</h4>
			{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		

		{{-- Form Section 1 --}}
		<label>valor total da nota</label><br>
		<input type="text" name="valortotaldanota" value="{{$Entrada->valortotaldanota}}"><br><br>
		<label>data da entrada</label>
		<input type="text" name="dataentrada" value="{{$Entrada->dataentrada}}"><br><br>
		<label>fornecedor</label>
		<input type="text" name="fornecedor_id" value="{{$Entrada->fornecedor_id}}"><br><br>

		<input type="submit" class="button" value="editar">
			
		</div>
		

	</form>





</body>


@endsection('conteudo')
@section('footer')

@endsection('footer')
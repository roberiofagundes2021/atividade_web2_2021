

@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

	<div>
		<h4>edição de cliente</h4>
		<form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="post">

		@csrf
		@method('PUT')
		

		<label for="nome">nome do cliente</label>
		<input type="text" name="nome" value="{{$cliente->nome}}">

		<label for="nome">debito</label>
		<input type="text" name="debito" value="{{$cliente->debito}}">

		

		 <label for="cpf">cpf</label>
         <input type="text" name="cpf" value="{{$cliente->cpf}}"><br><br>

        <label for="rg">rg</label>
        <input type="text" name="rg" value="{{$cliente->rg}}">


        <label for="datanascimento">datanascimento</label>
        <input type="date" name="datanascimento" value="{{$cliente->datanascimento}}">

        <label for="sexo">sexo</label>
        <input type="text" name="sexo" value="{{$cliente->sexo}}"><br><br>

        <input type="submit" class="button" value="editar">
	</form>
	</div>
	
		

@endsection('conteudo')
@section('footer')

@endsection('footer')
	






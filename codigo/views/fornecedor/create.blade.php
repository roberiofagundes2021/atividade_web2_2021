@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

<h1>pagina de cadastro de forncedor</h1>
<form action="{{route('fornecedor.store')}}" method="post">
    @csrf
    <label for="nome">nome</label><br><br>
        <input type="text" name="nome" id="nome"><br><br>

    <label for="CNPJ">CNPJ</label><br><br>
        <input type="text" name="CNPJ" id="CNPJ"><br><br>
        <input type="submit" class="button" value="cadastrar">

    </label>
</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')

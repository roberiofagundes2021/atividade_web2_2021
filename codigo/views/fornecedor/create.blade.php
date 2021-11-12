@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')


<div class="row g-3">
    <div class="col">
        <h4>Cadastro de forncedor</h4>
        <form action="{{route('fornecedor.store')}}" method="post">
            @csrf
            <label for="nome">nome</label><br>
                <input class="form-control" type="text" name="nome" id="nome">
            <label for="CNPJ">CNPJ</label><br>
                <input class="form-control" type="text" name="CNPJ" id="CNPJ"><br><br>
                <input type="submit" class="btn btn-primary" value="cadastrar">
    </label>
</form>
    </div>
</div><br>



@endsection('conteudo')
@section('footer')

@endsection('footer')

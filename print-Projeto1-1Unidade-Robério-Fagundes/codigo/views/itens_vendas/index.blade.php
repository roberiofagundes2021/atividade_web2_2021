@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')


<table class="table table-sm">
    <div>
        <h4>Tabela de itens vendas</h4>
    </div>
    @foreach ($Itens_Vendas as $Itens_Venda )
        <thead>
            <th>quantidade_itens</th>
            <th>desconto</th>
            <th>valor</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <thead>
            <td>{{$Itens_Venda->quantidade_itens}}</td>
            <td>{{$Itens_Venda->desconto}}</td>
            <td>{{$Itens_Venda->valor}}</td>
            <td> 
                <form action="../itensVenda/{{$Itens_Venda->id}}" method="post">
                @csrf
                @method('DELETE')   
                <input type="submit" class="btn btn-primary" value="deletar">
                </form>
            </td>
            <td>
                <form action="{{route('itensvendas.create')}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                </form>
            </td>

            <td>
                <form action="{{route('itensVenda.edit', ['id' => $Itens_Venda->id])}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                </form>
            </td>

        </thead>
    @endforeach
</table>


@endsection('conteudo')
@section('footer')

@endsection('footer')

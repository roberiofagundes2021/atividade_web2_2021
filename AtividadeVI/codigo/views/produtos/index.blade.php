@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')



    <table class="table table-sm">
        <caption>Tabela de produtos</caption>
        @foreach ($Produtos as $Produto )
        <div id="tabela">
             <thead>
            
            <th>icms</th>
            <th>ipi</th>
            <th>frete</th>
            <th>valornafabrica</th>

             <th>valordecompra</th>
            <th>lucro</th>
            <th>valordevenda</th>
            <th>desconto</th>
            <th>quantidade</th>
            <th>datavencimento</th>  
            <th>nome do produto</th>          
        </thead>
        <thead>
           
            <td>{{$Produto->icms}}</td>
            <td>{{$Produto->ipi}}</td>
            <td>{{$Produto->frete}}</td>
            <td>{{$Produto->valornafabrica}}</td>
            
            <td>{{$Produto->valordecompra}}</td>
            <td>{{$Produto->lucro}}</td>
            <td>{{$Produto->valordevenda}}</td>
            <td>{{$Produto->desconto}}</td>
            <td>{{$Produto->quantidade}}</td>
            <td>{{$Produto->datavencimento}}</td>
             <td>{{$Produto->nome}}</td>
        </thead>
        <thead>
                <td>
                   <form action="{{route('produto.delete', ['id' => $Produto->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="button" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('produto.create')}}" method="post">
                        @csrf
                        <input type="submit" class="button" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('produto.edit', ['id' => $Produto->id])}}" method="post">
                        @csrf
                        <input type="submit" class="button" name="formulario" value="alterar">
                    </form>
                </td>
        </thead>
        </div>
       @endforeach
    </table>



@endsection('conteudo')
@section('footer')

@endsection('footer')

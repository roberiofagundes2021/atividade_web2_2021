@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')



    <table class="table table-sm">
        <caption>Tabela de produtos</caption>
       
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
            <th></th>
            <th></th>
            <th></th>
            <th></th>         
        </thead>
        <thead>
            @foreach ($Produtos as $Produto )
            <td>{{$Produto->icms}} </td>
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
        
                <td>
                   <form action="{{route('produto.delete', ['id' => $Produto->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('produto.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('produto.edit', ['id' => $Produto->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
                 @endforeach
        </thead>
        </div>
      
    </table>



@endsection('conteudo')
@section('footer')

@endsection('footer')

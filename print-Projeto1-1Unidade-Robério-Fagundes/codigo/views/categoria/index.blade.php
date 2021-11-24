@extends('layouts.main')

@section('titulo','Sistema de Venda')

@section('conteudo')

    
    <table class="table table-sm">
        <div>
            <h4>Tabela de categoria</h4>
        </div>
            @foreach ($categorias as $categoria)
                <thead>
                    <tr>
                        
                          <th>nome</th>
                          <th></th>
                          <th></th>
                          <th></th>
                    </tr>
                </thead>
           

                    <td>{{$categoria->nome}}</td>
              
                        <td>
                            <form action="{{route('categoria.delete', ['id' => $categoria->id])}}" method="post">
                            @csrf
                            @method('DELETE')   
                            <input type="submit" class="btn btn-primary" value="deletar">
                            </form> 
                        </td>
                        <td>
                            <form action="{{route('categoria.create')}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                            </form>
                        </td>
                        <td>
                            <form action="{{route('categoria.edit', ['id' => $categoria->id])}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                            </form>
                        </td>
              
            @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')





@extends('layouts.main')

@section('titulo','Sistema de Venda')


@section('conteudo')

  <table class="table table-sm">
    <div>
        <caption>Tabela de categoria</caption>
       
    </div>
   
      @foreach ($categorias as $categoria)
      <thead>
        <tr>
          <th scope="col">id</th>
          <th>nome</th><br>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
       
            <td scope="row">{{$categoria->id}}</td>

          <td>{{$categoria->nome}}</td>
          
             <td>
                   <form action="{{route('categoria.delete', ['id' => $categoria->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="button" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('categoria.create')}}" method="post">
                        @csrf
                        <input type="submit" class="button" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('categoria.edit', ['id' => $categoria->id])}}" method="post">
                        @csrf
                        <input type="submit" class="button" name="formulario" value="alterar">
                    </form>
                </td>
          
          @endforeach
     
     
    </table>


    


@endsection('conteudo')

@section('footer')

@endsection('footer')





@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')



<div>


    
    <table class="table table-sm">
        <caption>Tabela de entradas</caption>
        @foreach ($Entradas as $entrada)
        <thead>
        <tr>
          <th scope="col">valor total da nota</th>
          <th>data da entrada</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>

      </thead>
      <thead>
         <td scope="row">{{$entrada->valortotaldanota}}</td>   
         <td>{{$entrada->dataentrada}}</td>
         <td class="tabela">
             <td>
            <form action="{{route('entradas.create')}}" method="post">
                @csrf 
                <input type="submit" class="button" name="formulario" value="novo">
            </form>
         </td>

          <td>
            <form action="{{route('entradas.edit', ['id' => $entrada->id])}}" method="post">
                @csrf 
                <input type="submit" class="button" name="formulario" value="alterar">
            </form>
         </td>

         <td>
            <form action="{{route('entradas.delete', ['id' => $entrada->id])}}" method="post">
                @csrf
                @method('DELETE')   
                <div id="button">
                <input type="submit" class="button" name="formulario"  value="deletar">
                </div>
               
            </form>
         </td>
      </thead>
      @endforeach
    </table>

       
     



 </div>


@endsection('conteudo')
@section('footer')

@endsection('footer')

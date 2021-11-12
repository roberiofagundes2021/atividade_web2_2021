
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

<form action="{{route('vendas.store')}}" method="post">
   <div class="row g-3">
    <h4>cadastro de venda</h4><br>
        <div class="col">
             @csrf
            <label for="nome">descontototal</label>
            <input class="form-control" type="text" name="descontototal" id="descontototal">

            <label for="descontoacerto">descontoacerto</label>
            <input class="form-control" type="text" name="descontoacerto" id="descontoacerto">

            <label for=" data_venda"> data_venda</label>
            <input class="form-control" type="date" name=" data_venda" id=" data_venda">

    
            <label for="id_clientes">cliente</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select class="form-control" name="id_clientes">
                    @foreach($Clientes as $cliente)
                    <option value="{{ $cliente->id_clientes }}">
                        {{ $cliente->nome }}
                    </option>
                     @endforeach
                </select>
           
    <br>
 
        
       

    <input type="submit" class="btn btn-primary" value="cadastrar">
        
    </div>
    

</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')
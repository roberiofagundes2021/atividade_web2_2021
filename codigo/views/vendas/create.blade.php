
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

<form action="{{route('vendas.store')}}" method="post">
    <div>
        <h4>cadastro de venda</h4><br>
        @csrf
    <label for="nome">descontototal</label>
        <input type="text" name="descontototal" id="descontototal">

        <label for="descontoacerto">descontoacerto</label>
        <input type="text" name="descontoacerto" id="descontoacerto"><br><br>

         <label for=" data_venda"> data_venda</label>
        <input type="date" name=" data_venda" id=" data_venda">

    
            <label for="id_clientes">cliente</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="id_clientes">
                    @foreach($Clientes as $cliente)
                    <option value="{{ $cliente->id_clientes }}">
                        {{ $cliente->nome }}
                    </option>
                     @endforeach
                </select>
           
    <br><br>
 

    <input type="submit" class="button" value="cadastrar">
        
    </div>
    

</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')
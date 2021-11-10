
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')


<form action="{{route('itensvendas.store')}}" method="post">
    @csrf

    <div>
        <h4>Cadastro de itens vendas</h4>
       
        <label for="quantidade_itens">quantidade de itens</label><br>
    <input type="text" name="quantidade_itens" id="quantidade_itens"><br>

       <label for="valor">valor</label><br>
    <input type="text" name="valor" id="valor"><br>


            <label for="id_produtos">produto</label><br>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="produto_id">
                    @foreach($Produtos as $produto)
                    <option value="{{ $produto->produto_id }}">
                        {{ $produto->nome }}
                    </option>
                    @endforeach
                </select><br>
            
 

 
            <label for="id_vendas">venda</label><br>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            @foreach($Vendas as $venda)
                <select name="id_vendas">
                    <option value="{{ $venda->id_vendas }}">
                        {{ $venda->data_venda }}
                    </option>
                </select>
            @endforeach <br><br>
      

    <input type="submit" class="button" value="cadastrar">
    </label>

    </div>
    
</form>

@endsection('conteudo')
@section('footer')

@endsection('footer')

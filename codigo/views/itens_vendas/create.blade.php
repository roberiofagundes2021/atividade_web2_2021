
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')


    <form action="{{route('itensvendas.store')}}" method="post">
        @csrf
        
        <div class="row g-3">
            <h4>Cadastro de itens vendas</h4>
            <div class="col">
                <label for="quantidade_itens">quantidade de itens</label><br>
                <input type="text" class="form-control" name="quantidade_itens" id="quantidade_itens">

                <label for="valor">valor</label>
                <input type="text" class="form-control" name="valor" id="valor">


                <label  for="id_produtos">produto</label>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                
                <select class="form-control" name="produto_id">
                    @foreach($Produtos as $produto)
                    <option value="{{ $produto->produto_id }}">
                        {{ $produto->nome }}
                    </option>
                     @endforeach
                </select>
                 <label for="id_vendas">venda</label>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                    <select class="form-control" name="id_vendas">
                        @foreach($Vendas as $venda)
                        <option value="{{ $venda->id_vendas }}">
                            {{ $venda->data_venda }}
                        </option>
                        @endforeach
                    </select><br>
                 <input type="submit" class="btn btn-primary" value="cadastrar">
            </div>
      
        
    </form>

@endsection('conteudo')
@section('footer')

@endsection('footer')

@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')



    

<div>
    <h4>Cadastro de produto</h4><br>
    <form action="{{route('produto.store')}}" method="post">
    <div>
         @csrf
    <label for="nomedoproduto">nome do produto</label>
        <input type="text" name="nomedoproduto" id="nomedoproduto">

    <label for="icms">icms</label>
        <input type="text" name="icms" id="icms">

    <label for="ipi">ipi</label>
        <input type="text" name="ipi" id="ipi"><br><br>

    <label for="frete">frete</label>
        <input type="text" name="frete" id="frete">

    <label for="valornafabrica">valor na fabrica</label>
        <input type="text" name="valornafabrica" id="valornafabrica">

    <label for="valordecompra">valor de compra</label>
        <input type="text" name="valordecompra" id="valordecompra"><br><br>

    <label for="lucro">lucro</label>
        <input type="text" name="lucro" id="lucro">

    <label for="valordevenda">valor de venda</label>
        <input type="text" name="valordevenda" id="valordevenda">

    <label for="desconto">desconto</label>
        <input type="text" name="desconto" id="desconto"><br><br>

    <label for="quantidade">quantidade</label>
        <input type="text" name="quantidade" id="quantidade">

    <label for="datavencimento">data de vencimento</label>
        <input type="date" name="datavencimento" id="datavencimento">

 
            <label for="id_categorias">categoria</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="id_categorias">
                    @foreach($Categorias as $categoria)
                    <option value="{{ $categoria->id_categorias }}">
                        {{ $categoria->nome }}
                    </option>
                    @endforeach
                </select>
            
 

      
            <label for="id_marcas">marcas</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="id_marcas">
                    @foreach($Marcas as $marca)
                    <option value="{{ $marca->id_marcas }}">
                        {{ $marca->nome }}
                    </option>
                     @endforeach
                </select><br><br>

  

        <input type="submit" class="button" value="cadastrar">
        
    </div>

   

</form>

</div>


@endsection('conteudo')
@section('footer')

@endsection('footer')

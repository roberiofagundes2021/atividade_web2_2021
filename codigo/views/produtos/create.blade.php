@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')
<form action="{{route('produto.store')}}" method="post">
<div class="row g-3">
    
        @csrf
        
            <h4>Cadastro de produto</h4>
    
        <div class="col">
            <label for="nomedoproduto">nome do produto</label>
                <input type="text" name="nome" class="form-control" placeholder="nome do produto" aria-label="First name">

            <label for="icms">icms</label>
                <input type="text" name="icms" class="form-control" placeholder="icms" aria-label="First name">

            <label for="lucro">lucro</label>
                <input type="text" name="lucro" class="form-control" placeholder="lucro" aria-label="First name"><br> 

             <input type="submit" class="btn btn-primary" value="cadastrar">                
        </div>

        <div class="col">
            <label for="nomedoproduto">ipi</label>
                <input type="text" name="ipi" class="form-control" placeholder="nome do produto" aria-label="First name">

            <label for="nomedoproduto">frete</label>
                <input type="text" name="icms" class="form-control" placeholder="frete" aria-label="First name">

              <label for="valorvenda">valor de venda</label>
                <input type="text" name="valorvenda" class="form-control" placeholder="valor de venda" aria-label="First name">

              

        </div>
  
        <div class="col">
            <label for="valornafabrica">valor na fabrica</label>
            <input type="text" class="form-control" placeholder="valor na fabrica" aria-label="Last name" name="valornafabrica">

            <label for="valordecompra">valor de compra</label>
            <input type="text" class="form-control" placeholder="valor de compra" aria-label="Last name" name="valordecompra">

             <label for="desconto">desconto</label>
            <input type="text" class="form-control" placeholder="desconto" aria-label="Last name" name="desconto">

        </div>

        <div class="col">
           

             <label for="quantidade">quantidade</label>
                <input type="text" name="quantidade" class="form-control" placeholder="quantidade" aria-label="First name">

             <label for="datavencimento">data de vencimento</label>
                 <input type="date" name="datavencimento" class="form-control" placeholder="datavencimento" aria-label="First name">

                 <label for="marca_id">marcas</label><br>
                <select class="form-control" name="marca_id">
                    @foreach($Marcas as $marca)
                    <option>selecione</option>
                    <option value="{{ $marca->marca_id }}">
                        {{ $marca->nome }}
                    </option>
                     @endforeach
                </select><br>
              

        </div>

        <div class="col">
              


            <label for="categoria_id">categoria</label><br>
                <select name="categoria_id" class="form-control">
                    @foreach($Categorias as $categoria)
                    <option>selecione</option>
                    <option value="{{ $categoria->categoria_id }}">
                        {{ $categoria->nome }}
                    </option>
                    @endforeach
                </select>

               



        
        </div>


         
    
    </form>
    
  </div>



@endsection('conteudo')
@section('footer')

@endsection('footer')

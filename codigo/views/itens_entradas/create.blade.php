@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

<div class="row g-3">
    
   
        <form action="{{route('itensentradas.store')}}" method="post">
             <h4>cadastro de itens entradas</h4><br>
             <div class="col">

                @csrf
                <label for="quantidade">quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade">

                <label for="unidade">unidade</label>
                <input type="text" class="form-control" name="unidade" id="unidade">

                <label for="ipi">ipi</label>
                <input type="text" class="form-control" name="ipi" id="ipi">

                <label for="frete">frete</label>
                <input type="text" class="form-control" name="frete" id="frete"><br>

                <input type="submit" class="btn btn-primary" value="cadastrar"><br>
            </div><br><br>

            <div class="col">
                <label for="icms">icms</label>
                <input type="text" class="form-control" name="icms" id="icms"><br>

                <label for="id_entradas" class="form-control">entrada</label>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                   
                    <select class="form-control"  name="id_entradas">
                        @foreach($Entradas as $entrada)  
                            <option value="{{ $entrada->id_entradas }}"><br>
                                {{ $entrada->dataentrada }}<br>
                            </option>
                        @endforeach                        
                    </select><br>
                        
               

            </div>

            <div class="col">
                 <label for="id_produtos">produto</label>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                      
                      
                    <select class="form-control" name="id_produtos" id="id_produtos">
                        @foreach($Produtos as $produto)
                            
                            <option value="{{ $produto->id_produtos }}">
                                {{ $produto->nome }}
                            </option>  
                        @endforeach          
                             
                    </select> <br>
                     
                
                <label for="precocompra">preco de compra</label>
                <input type="text" class="form-control" name="precocompra" id="precocompra"><br><br>
            </div>  

        </form>

        

@endsection('conteudo')
@section('footer')

@endsection('footer')
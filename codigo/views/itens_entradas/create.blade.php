@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

<form action="{{route('itensentradas.store')}}" method="post">
    @csrf
        <div id="row">
            <h4>cadastro de itens entradas</h4><br>
       
        <label for="quantidade">quantidade</label>
        <input type="text" name="quantidade" id="quantidade">

        <label for="unidade">unidade</label>
        <input type="text" name="unidade" id="unidade">


        <label for="ipi">ipi</label>
        <input type="text" name="ipi" id="ipi"><br><br>

        <label for="frete">frete</label>
        <input type="text" name="frete" id="frete">

        <label for="icms">icms</label>
        <input type="text" name="icms" id="icms">

            <label for="id_entradas">entrada</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
           
                    <select name="id_entradas">
                         @foreach($Entradas as $entrada)
                        
                            <option value="{{ $entrada->id_entradas }}"><br>
                        {{ $entrada->dataentrada }}<br>
                    </option>
                        @endforeach                        
                </select>
                
            

       
            <label for="id_produtos">produto</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
              
            
              
                <select name="id_produtos" id="id_produtos">
                    @foreach($Produtos as $produto)
                    
                        <option value="{{ $produto->id_produtos }}">
                        {{ $produto->nome }}
                    </option>  
                    @endforeach          
                     
                </select> <br><br>
             
        
         <label for="precocompra">preco de compra</label>
        <input type="text" name="precocompra" id="precocompra"><br><br>

        <input type="submit" class="button" value="cadastrar">
    </label>
    
    

</form>
        </div>
        

@endsection('conteudo')
@section('footer')

@endsection('footer')
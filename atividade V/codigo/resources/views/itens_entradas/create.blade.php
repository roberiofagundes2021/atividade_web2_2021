
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
    <title>Document</title>
</head>
<div id="body">
    <body>
<h1>pagina de cadastro de itens entradas</h1>
<form action="{{route('itensentradas.store')}}" method="post">
    @csrf
    <label for="precocompra">preco de compra</label><br><br>
        <input type="text" name="precocompra" id="precocompra"><br><br>

        <label for="quantidade">quantidade</label><br><br>
        <input type="text" name="quantidade" id="quantidade"><br><br>

        <label for="unidade">unidade</label><br><br>
        <input type="text" name="unidade" id="unidade"><br><br>


        <label for="ipi">ipi</label><br><br>
        <input type="text" name="ipi" id="ipi"><br><br>

        <label for="frete">frete</label><br><br>
        <input type="text" name="frete" id="frete"><br><br>

        <label for="icms">icms</label><br><br>
        <input type="text" name="icms" id="icms"><br><br>


        <div>
            <label for="id_entradas">entrada</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
           

                    <select name="id_entradas">
                         @foreach($Entradas as $entrada)
                        
                            <option value="{{ $entrada->id_entradas }}"><br>
                        {{ $entrada->dataentrada }}<br>
                    </option>
                        @endforeach                        
                </select>     
            
        </div><br>
                
            

        <div>
            <label for="id_produtos">produto</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
              
            
              
                <select name="id_produtos" id="id_produtos">
                    @foreach($Produtos as $produto)
                    
                        <option value="{{ $produto->id_produtos }}">
                        {{ $produto->nomedoproduto }}
                    </option>  
                    @endforeach          
                     
                </select> 
             
        </div><br>

        <input type="submit" value="cadastrar">
    </label>

</form>

</body>

</div>

</html>

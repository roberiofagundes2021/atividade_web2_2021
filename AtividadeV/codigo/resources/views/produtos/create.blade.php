
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css'); }}">
    <title>Document</title>
</head>

<div id="body">

    <h1>pagina de cadastro de produtos</h1>

<form action="{{route('produto.store')}}" method="post">
    @csrf
    <label for="nomedoproduto">nome do produto</label><br><br>
        <input type="text" name="nomedoproduto" id="nomedoproduto"><br><br>

    <label for="icms">icms</label><br><br>
        <input type="text" name="icms" id="icms"><br><br>

    <label for="ipi">ipi</label><br><br>
        <input type="text" name="ipi" id="ipi"><br><br>

    <label for="frete">frete</label><br><br>
        <input type="text" name="frete" id="frete"><br><br>

    <label for="valornafabrica">valor na fabrica</label><br><br>
        <input type="text" name="valornafabrica" id="valornafabrica"><br><br>


    <label for="valordecompra">valor de compra</label><br><br>
        <input type="text" name="valordecompra" id="valordecompra"><br><br>

    <label for="lucro">lucro</label><br><br>
        <input type="text" name="lucro" id="lucro"><br><br>

    <label for="valordevenda">valor de venda</label><br><br>
        <input type="text" name="valordevenda" id="valordevenda"><br><br>

    <label for="desconto">desconto</label><br><br>
        <input type="text" name="desconto" id="desconto"><br><br>

    <label for="quantidade">quantidade</label><br><br>
        <input type="text" name="quantidade" id="quantidade"><br><br>

    <label for="datavencimento">data de vencimento</label><br><br>
        <input type="date" name="datavencimento" id="datavencimento"><br><br>

     <div>
            <label for="id_categorias">categoria</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="id_categorias">
                    @foreach($Categorias as $categoria)
                    <option value="{{ $categoria->id_categorias }}">
                        {{ $categoria->nome }}
                    </option>
                    @endforeach
                </select>
            
        </div><br>

      <div>
      
      <div>
            <label for="id_marcas">marcas</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="id_marcas">
                    @foreach($Marcas as $marca)
                    <option value="{{ $marca->id_marcas }}">
                        {{ $marca->nome }}
                    </option>
                     @endforeach
                </select>
           
        </div><br>

      <div>

        <input type="submit" value="cadastrar">

</form>

</body>
    



</div>
<body>

</html>

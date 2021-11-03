
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
    <h1>pagina de cadastro de itens vendas</h1>
<form action="{{route('itensvendas.store')}}" method="post">
    @csrf
    <label for="quantidade_itens">quantidade de itens</label><br><br>
    <input type="text" name="quantidade_itens" id="quantidade_itens"><br><br>

   

     <div>
            <label for="id_produtos">produto</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="id_produtos">
                    @foreach($Produtos as $produto)
                    <option value="{{ $produto->id_produtos }}">
                        {{ $produto->nomedoproduto }}
                    </option>
                    @endforeach
                </select>
            
        </div><br>

      <div>
            <label for="id_vendas">venda</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            @foreach($Vendas as $venda)
                <select name="id_vendas">
                    <option value="{{ $venda->id_vendas }}">
                        {{ $venda->data_venda }}
                    </option>
                </select>
            @endforeach
        </div><br>

    <input type="submit" value="cadastrar">
    </label>

</form>

</body>

</div>
<body>

</html>


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

    <body>
<h1>pagina de cadastro de vendas</h1>
<form action="{{route('vendas.store')}}" method="post">
    @csrf
    <label for="nome">descontototal</label><br><br>
        <input type="text" name="descontototal" id="descontototal"><br><br>

        <label for="descontoacerto">descontoacerto</label><br><br>
        <input type="text" name="descontoacerto" id="descontoacerto"><br><br>

         <label for=" data_venda"> data_venda</label><br><br>
        <input type="date" name=" data_venda" id=" data_venda"><br><br>

       
        
        <div>
            <label for="id_clientes">cliente</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select name="id_clientes">
                    @foreach($Clientes as $cliente)
                    <option value="{{ $cliente->id_clientes }}">
                        {{ $cliente->nome }}
                    </option>
                     @endforeach
                </select>
           
        </div><br>
    </label>

    <input type="submit" value="cadastrar">

</form>


</body>
    


</div>

</html>

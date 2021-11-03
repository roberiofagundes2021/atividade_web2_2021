
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
<h1>pagina de cadastro de forncedor</h1>
<form action="{{route('entradas.store')}}" method="post">
    @csrf
    <label for="nome">valor total da nota</label><br><br>
    <input type="text" name="valortotaldanota" id="valortotaldanota"><br><br>

    <label for="dataentrada">data da entrada</label><br><br>
    <input type="text" name="dataentrada" id="dataentrada"><br><br>

    <div>
        <label for="id_fornecedors">fornecedor</label>
        {{-- pega a variavel passada pelo metodo create do controller --}}
        
            <select name="id_fornecedors">
                @foreach($Fornecedors as $fornecedor)
                <option value="{{ $fornecedor->id_fornecedors }}">
                    {{ $fornecedor->nome }}
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

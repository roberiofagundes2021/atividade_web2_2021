
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
    <title>Cadastro de fornecedor</title>
</head>
<div id="body">

    <body>
<h1>pagina de cadastro de forncedor</h1>
<form action="{{route('fornecedor.store')}}" method="post">
    @csrf
    <label for="nome">nome</label><br><br>
        <input type="text" name="nome" id="nome"><br><br>

    <label for="CNPJ">CNPJ</label><br><br>
        <input type="text" name="CNPJ" id="CNPJ"><br><br>
        <input type="submit" value="cadastrar">

    </label>
</form>

</body>
    





</div>

</html>

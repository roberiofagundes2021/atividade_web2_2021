
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
    <title>Cadastro de cliente</title>
</head>
<div id="body">
    
    <body>
    <div id="body">
        
        <h1>pagina de cadastro de cliente</h1>
            <form action="{{route('cliente.store')}}" method="post">
            @csrf
                <label for="nome">nome</label><br><br>
                    <input type="text" name="nome" id="nome"><br><br>

                <label for="endereco">endereco</label><br><br>
                    <input type="text" name="endereco" id="endereco"><br><br>


                <label for="debito">debito</label><br><br>
                    <input type="text" name="debito" id="debito"><br><br>

            <input type="submit" value="cadastrar">    
            </form>

    </div>

</body>









</div>

</html>


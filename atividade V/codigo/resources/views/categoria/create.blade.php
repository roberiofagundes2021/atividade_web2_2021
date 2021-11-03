
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">
    <section>
        <title>Cadastro de categoria</title>
        
    </section>
    
</head>
<body>
    <div id="body">
        <h1>pagina de cadastro de categoria</h1>
            <form action="{{route('categoria.store')}}" method="post">
                @csrf
                <label for="nome">nome</label><br><br>
                    <input type="text" name="nome" id="nome"><br><br>
                    
                        <div id="button">
                            <input type="submit" id="button" value="cadastrar">
                        </div>
                        
                  
                    

                </label>
            </form>
    </div>

</body>
</html>

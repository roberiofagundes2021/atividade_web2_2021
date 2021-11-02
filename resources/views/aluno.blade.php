<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <h1>Página do aluno</h1>
    @if($id != null)
    <p>parametros opticional {{$id}}</p>
    @endif

    <p>objeto pesquisado{{$pesquisa}}</p>
</body>
</html>


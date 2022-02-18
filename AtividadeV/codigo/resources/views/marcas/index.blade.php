<h1>cadastro de marcas</h1>

@foreach ($Marcas as $Marca)
    <ul>
        <li>nome: {{$Marca->nome}} </li>
    </ul>

@endforeach

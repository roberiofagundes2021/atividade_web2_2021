<h1>paginas de entradas</h1>

@foreach ($Entradas as $entrada)
    <ul>
        <li>valor da entrada {{$entrada->valortotaldanota}} </li>
        <li>data da entrada {{$entrada->dataentrada}}</li>
    </ul>

@endforeach

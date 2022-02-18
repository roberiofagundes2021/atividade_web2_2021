<h1>paginas de cliente</h1>

@foreach ($clientes as $cliente)
<ul>
    <li>nome do cliente: {{$cliente->nome}}</li>
    <li>debito :{{$cliente->debito}}</li>
    <li>endereço :{{$cliente->endereco}}</li>
</ul>
@endforeach

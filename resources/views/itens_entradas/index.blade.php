<h1>paginas de itens de entradas </h1>

@foreach ($ItensEntradas as $ItensEntrada)
    <ul>
        <li>precocompra {{$ItensEntrada->precocompra}}</li>
        <li>quantidade {{$ItensEntrada->quantidade}}</li>
        <li>unidade {{$ItensEntrada->unidade}}</li>
        <li>ipi {{$ItensEntrada->ipi}}</li>
        <li>frete {{$ItensEntrada->frete}}</li>
        <li>icms {{$ItensEntrada->icms}}</li>
    </ul>

@endforeach

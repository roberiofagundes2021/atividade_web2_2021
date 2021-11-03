
<h1>Vendas</h1>

@foreach ($Vendas as $venda)
    <ul>
        <li>data da venda {{$venda->data_venda}}</li>
        <li>desconto total {{$venda->descontototal}}</li>
        <li>desconto acerto {{$venda->descontoacerto}}</li>
    </ul>

@endforeach

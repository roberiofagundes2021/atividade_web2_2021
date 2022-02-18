<h1>paginas de itens de vendas </h1>

@foreach ($Itens_Vendas as $Itens_Venda )

    <ul>
        <li>quantidade_itens{{$Itens_Venda->quantidade_itens}}</li>
    </ul>

@endforeach

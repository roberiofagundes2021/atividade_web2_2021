<h1> produtos</h1>

@foreach ($Produtos as $Produto )

    <ul>
        <li>nome do produto {{$Produto->nomedoproduto}} </li>
        <li>icms {{$Produto->icms}} </li>
        <li>ipi {{$Produto->ipi}} </li>
        <li>frete {{$Produto->frete}} </li>
        <li>valornafabrica {{$Produto->valornafabrica}} </li>
        <li>valordecompra{{$Produto->valordecompra}} </li>
        <li>lucro{{$Produto->lucro}} </li>
        <li>valordevenda {{$Produto->valordevenda}} </li>
        <li>desconto {{$Produto->desconto}} </li>
        <li>quantidade {{$Produto->quantidade}} </li>
        <li>datavencimento {{$Produto->datavencimento}} </li>
    </ul>

@endforeach

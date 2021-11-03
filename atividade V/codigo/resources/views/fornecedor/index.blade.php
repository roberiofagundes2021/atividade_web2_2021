<h1>pagina de fornecedores<h1>

@foreach ($Fornecedors as $Fornecedor)
    <ul>
        <li>nome: {{$Fornecedor->nome}}</li>
        <li>CNPJ: {{$Fornecedor->CNPJ}}</li>
    </ul>
@endforeach

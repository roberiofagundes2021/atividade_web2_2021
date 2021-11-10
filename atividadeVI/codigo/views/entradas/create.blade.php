
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')


<form action="{{route('entradas.store')}}" method="post">
    @csrf
    <div>
        <h4>Cadastro de entrada</h4>
        <label for="nome">valor total da nota</label><br>
    <input type="text" name="valortotaldanota" id="valortotaldanota"><br><br>

    <label for="dataentrada">data da entrada</label><br>
    <input type="text" name="dataentrada" id="dataentrada"><br><br>


        <label for="id_fornecedors">fornecedor</label>
        {{-- pega a variavel passada pelo metodo create do controller --}}
        
            <select name="id_fornecedors">
                @foreach($Fornecedors as $fornecedor)
                <option value="{{ $fornecedor->id_fornecedors }}">
                    {{ $fornecedor->razaosocial }}
                </option>
                @endforeach
            </select><br><br>
        
    <input type="submit" class="button" value="cadastrar">
    </label>
    </div>
    

</form>

@endsection('conteudo')
@section('footer')

@endsection('footer')
    






</div>

</html>

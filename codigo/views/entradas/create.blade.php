
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

 <div class="row g-3">
    <h4>Cadastro de entrada</h4>
    <div class="col">
        <form action="{{route('entradas.store')}}" method="post">
        @csrf
        <label for="nome">valor total da nota</label><br>
        <input type="text" class="form-control" name="valortotaldanota" id="valortotaldanota">

        <label for="dataentrada">data da entrada</label><br>
        <input type="text" class="form-control" name="dataentrada" id="dataentrada">

        <label for="id_fornecedors">fornecedor</label><br>
        {{-- pega a variavel passada pelo metodo create do controller --}}
        
        <select name="id_fornecedors" class="form-control">
            @foreach($Fornecedors as $fornecedor)
                <option class="form-control" value="{{ $fornecedor->id_fornecedors }}">
                    {{ $fornecedor->razaosocial }}
                </option>
            @endforeach
        </select><br><br>
        
        <input type="submit" class="btn btn-primary" value="cadastrar">
        </form>
    </div>
</div><br>


@endsection('conteudo')
@section('footer')

@endsection('footer')
    






</div>

</html>

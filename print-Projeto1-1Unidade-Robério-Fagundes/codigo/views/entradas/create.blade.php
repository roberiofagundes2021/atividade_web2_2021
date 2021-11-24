
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')


 <div class="row g-3">
    <h4 align="justify">Cadastro de entrada</h4>
     
    <div class="col">
        <form action="{{route('entradas.store')}}" method="post">
            @csrf
            <label for="nome">valor total da nota</label><br>
            <input type="text" class="form-control" name="valortotaldanota" id="valortotaldanota">

            <label for="dataentrada">data da entrada</label><br>
            <input type="date" class="form-control" name="dataentrada" id="dataentrada">

            <label for="fornecedor_id">fornecedor</label><br>
            {{-- pega a variavel passada pelo metodo create do controller --}}

            <select name="fornecedor_id" class="form-control" name="fornecedor_id">
                @foreach($Fornecedors as $fornecedor)
                    <option  class="form-control" value="{{ $fornecedor->fornecedor_id }}">
                        {{ $fornecedor->razaosocial }}
                    </option>
                @endforeach
            </select><br>

            <input type="submit" class="btn btn-primary" value="cadastrar">
       
    </div>

     <div class="col">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                
            </div>

        @endif
            
        </div>

         </form>
</div><br>




@endsection('conteudo')
@section('footer')

@endsection('footer')

</div>

</html>

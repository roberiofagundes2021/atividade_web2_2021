
@extends('layouts.main')

@section('titulo','Sistema de Venda')
@section('conteudo')

    
        
        <form action="{{route('marca.store')}}" method="post">
            <div>
                @csrf
                <h1>pagina de cadastro de marca</h1>
            <label for="nome">nome</label><br><br>
            <input type="text" name="nome" id="nome"><br><br>

            <input type="submit" class="button" value="cadastrar">
            </label> 
            </div>
           

        </form>

@endsection('conteudo')
@section('footer')

@endsection('footer')


@extends('layouts.main')

@section('titulo','Sistema de Venda')


@section('conteudo')
    <div>
            <h4>Cadastro de cliente</h4><br>
        
            <form action="{{route('cliente.store')}}" method="post">
                <div>
                     @csrf
                
                <label for="nome">nome</label>
                    <input type="text" name="nome" id="nome">


                <label for="debito">debito</label>
                    <input type="text" name="debito" id="debito">

                <label for="cpf">cpf</label>
                    <input type="text" name="cpf" id="cpf"><br><br>

                     <label for="rg">rg</label>
                    <input type="text" name="rg" id="rg">


                 <label for="datanascimento">datanascimento</label>
                    <input type="date" name="datanascimento" id="datanascimento">

                <label for="sexo">sexo</label>
                    <input type="text" name="sexo" id="sexo"><br><br>

            <input type="submit" class="button" value="cadastrar">    
            </form>
                    
                </div>
           


    </div>
        
        

@endsection('conteudo')

@section('footer')

@endsection('footer')
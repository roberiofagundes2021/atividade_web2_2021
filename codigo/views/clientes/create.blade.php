
@extends('layouts.main')

@section('titulo','Sistema de Venda')


@section('conteudo')
    
    <div class="row g-3">
        <h4>Cadastro de cliente</h4><br>
        <div class="col">
                  
        
                    <form action="{{route('cliente.store')}}" method="post">
                    
                         @csrf
                    
                        <label for="nome">nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">


                        <label for="debito">debito</label>
                        <input type="text" class="form-control" name="debito" id="debito">

                        <label for="cpf">cpf</label>
                        <input type="text" class="form-control" name="cpf" id="cpf"><br><br>
                         <input type="submit" class="btn btn-primary" value="cadastrar">
        </div><br>

        <div class="col">
                        <label for="rg">rg</label>
                        <input type="text" class="form-control" name="rg" id="rg">


                        <label for="datanascimento">datanascimento</label>
                        <input type="date" class="form-control" name="datanascimento" id="datanascimento">

                        <label for="sexo">sexo</label>
                        <input type="text" class="form-control" name="sexo" id="sexo"><br><br>

                           
                    </form>
        </div>

        </div>

    </div>

          
                    
   
        
        

@endsection('conteudo')

@section('footer')

@endsection('footer')
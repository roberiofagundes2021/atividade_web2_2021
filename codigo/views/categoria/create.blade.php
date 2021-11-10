@extends('layouts.main')

@section('titulo','Sistema de Venda')


@section('conteudo')


     
            <form action="{{route('categoria.store')}}" method="post">
                @csrf
                <div id="row">
                   
                    
                </div>
                
                <div>
                    <h4>cadastro de categoria</h4><br>
                     <label for="nome">nome</label><br>
                    <input type="text" name="nome" id="nome"><br><br>
                    
                      
                    <input type="submit" class="button" id="button" value="cadastrar">
                    
                </div>
               
                       
                        
                  
                    

                </label>
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')
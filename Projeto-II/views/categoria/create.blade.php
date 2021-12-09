@extends('layouts.main')

@section('titulo','Perfume-Shop')


@section('conteudo')

   

        <div class="row g-3">
             
            <div class="col">
                <form action="{{route('categoria.store')}}" method="post">
                @csrf
                <div id="row">
                   
                    <h4>cadastro de categoria</h4><br>
                     <label for="nome" class="label">nome</label><br>
                    <input type="text" class="form-control" name="nome" id="nome"><br><br>
                    
                      
                    <input type="submit" class="btn btn-primary" value="cadastrar">
                    
                </div><br>

                 <div class="col">
                
                    @if($errors->any())
                        <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <label>{{$error}}</label><br>
                                @endforeach
                        </div>
                    @endif
            
                </div>
        </div>

     
            
               
                       
                        
                  
                    

                </label>
            </form>
@endsection('conteudo')

@section('footer')

@endsection('footer')
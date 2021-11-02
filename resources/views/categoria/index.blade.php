<h1>pagina de categoria</h1>

@foreach ($categorias as $categoria)
    <ul>
        <li> nome: {{$categoria->nome}}</li>

         <form action="/categoria/{{$categoria->id_categorias}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
        </form>

       <form>

        <input type="submit" value="editar">
           
       </form>
        
    </ul>



@endforeach

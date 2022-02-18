<h1>pagina de categoria</h1>

<body>
	
	<form action="../update/{{$categoria->id_categorias}}" method="post">
		
		@csrf
		@method('PUT')

		<label for="nome">nome da categoria</label>
		<input type="text" name="nome">

		<input type="submit" value="editar">

	</form>





</body>
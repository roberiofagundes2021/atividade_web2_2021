<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css'); }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div id="header">
			<h1>@yield('titulo')</h1>

			<div id="nav">
			<ul id="menu-h">
				<li><a href="{{route('produto.index')}}">Produtos</a> </li>
				<li><a href="{{route('fornecedor.index')}}">Fornecedores</a> </li>
				<li><a href="{{route('entradas.index')}}">Entradas</a> </li>
				<li><a href="{{route('vendas.index')}}">Vendas</a> </li>
				<li><a href="{{route('ItensEntradas.index')}}">Itens Entradas</a></li>
				<li><a href="{{route('cliente.index')}}">Clientes</a></li>
				<li><a href="{{route('categoria.index')}}">Categoria</a></li>
				<li><a href="{{route('marca.index')}}">Marca</a></li>
				<li><a href="{{route('itensVendas.index')}}">Itens Vendas</a></li>
			</ul>
		</div>
		</div>



<div id="container">
	 <h4>@yield('subtitulo')</h4>
  <table class="col" id="row">

  	 @yield('conteudo')<br>
  	
  </table>

</div>
	<div id="footer">
		@yield('footer')
			<br>
			<br><br>
			<center>copyrigth @perfumeshop</center>
			
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	

</body>
</html>


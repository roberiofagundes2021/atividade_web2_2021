


@extends('layouts.app')
@section('content')
@extends('layouts.main')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="nav">
			<ul id="menu-h">

				<li><a href="{{route('vendas.index')}}"> <img src="{{ URL::asset('images/VENDA.png'); }}"> <br> vendas</a> </li>
				<li><a href="{{route('produto.index')}}"><img src="{{ URL::asset('images/images.png'); }}"><br> produtos </a>  </a> </li>
				
			</ul>
		</div>
                    

                    {{ __('seja bem vindo') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

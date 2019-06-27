@extends('layouts.admin')

@section('header')
	
@endsection

@section('content')
@include('layouts.slider')

<hr>


<div class="card alert alert-primary" style="width: 18rem;">
	<div class="card-body">
	@foreach($articulos as $art)
		<img class="card-img-top" src="{{ asset('imagenes/articulos/'.$art->imagen) }}" alt="" style="size: 10cm">
		<h4 class="card-title">Nombre: {{$art->nombre}}</h4><hr>
		<h3 class="card-text">Precio: {{$art->stock}} bs.</h3>
		<p class="card-text">Descripción: {{$art->descripcion}}</p>
				
        <a class="btn btn-primary" href="{{ route('cart-add',$art->slug) }}">comprar</a>
      
		<a class="btn btn-info" href="{{ route('articulo-detalle', $art->slug) }}">Detalle</a>
		@endforeach
	</div>
</div>	
	



@endsection
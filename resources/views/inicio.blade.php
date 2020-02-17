@extends('tema.layouts')
@section('contenido')
<div class="container">
	<br>
	<div class="row">
		<div class="col-md-11 col-xs-12">
			@include('cliente.buscarArticulo')
		</div>				
	</div>

	<div class="row">
		@foreach($articulos as $art)
		<div class="col-sm-6">	
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="{{asset('imagenes/articulos/'.$art->imagen)}}" alt="" style="size: 10cm">
				<div class="card-body">				
					<h5 class="card-title">Nombre: {{$art->nombre}}</h5>
					<h6 class="card-text">Precio: {{$art->stock}} bs.</h6>				
					<p class="card-text" maxlength="10">Descripción:{{$art->descripcion_corta}}</p>						
					<a class="btn btn-primary" href="{{ route('cart-add',$art->slug) }}">comprar</a>		
					<a class="btn btn-info" href="{{ route('articulo-detalle', $art->slug) }}">Detalle</a>				
				</div>
			</div>

		</div>	
		@endforeach
	</div>
	<div class="pagination justify-content-center">
		{{ $articulos->links() }}
	</div>
</div>
@endsection
@extends('tema.layouts')
@section('contenido')
<hr>
<div class="row">
	<div class="col-md-8 col-xs-12">
		@include('cliente.buscarArticulo')
	</div>				
</div>
<div class="col col-12 col-sm8">
<div class="row">
	@foreach($articulos as $art)
	<div class="col-sm-6">	
		<div class="card alert alert-primary" style="width: 18rem;">
			<div class="card-body">			
				<img class="card-img-top" src="{{$art->imagen}}" alt="" style="size: 10cm">
				<h5 class="card-title">Nombre: {{$art->nombre}}</h5><hr>
				<h6 class="card-text">Precio: {{$art->stock}} bs.</h6>
				<p class="card-text">Descripción: {{$art->descripcion}}</p>						
				<a class="btn btn-primary" href="{{ route('cart-add',$art->slug) }}">comprar</a>			
				<a class="btn btn-info" href="{{ route('articulo-detalle', $art->slug) }}">Detalle</a>				
			</div>
		</div>

	</div>	
	@endforeach
</div>
</div>
<div class="pagination justify-content-center">
	{{ $articulos->links() }}
</div>

@endsection
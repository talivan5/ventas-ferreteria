@extends('tema.layouts')
@section('contenido')
<div class="container">
<br>
	<div class="input-group">
		<input type="text" name="searchText" class="form-control" placeholder="Buscar...">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
	<div class="row">
		@foreach($categorias as $cat)	
		<div class="col-sm-6">		
			<p>{{ $cat->categoria }}</p>
			<div class="card" style="width: 18rem;">
				<img src="{{asset('imagenes/articulos/'.$cat->imagen)}}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">{{ $cat->nombre }}</h5>
					<p class="card-text">Precio:{{$cat->slug}}Bs.</p>
					<a class="btn btn-primary" href="{{ route('cart-add',$cat->slug) }}">comprar</a>
					<a class="btn btn-info" href="{{ route('articulo-detalle', $cat->slug) }}">Detalle</a>				
				</div>
			</div>	
		</div>		
		@endforeach
	</div>
	<div class="pagination justify-content-center">
		{{ $categorias->render() }}
	</div>
</div>
@endsection
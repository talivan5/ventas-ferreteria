@extends('tema.principal')
@section('contenido')

<hr>
<div class="row">
	<div class="col col-md-4">
		<h1>Categorias</h1>
		@foreach($categorias as $art)
		<div class="row col-md-12">	
			<div class="list-group" style="width: 200px;">
				<a href="{{ asset('/'.$art->id) }}" class="list-group-item list-group-item-action">{{$art->nombre}}</a>
			</div>			
		</div>
		@endforeach
	</div>
	<div class="row col col-md-8">
		@foreach($articulos as $art)
		<div class="col-md-6">	
			<div class="card alert alert-primary" style="width: 18rem;">
				<div class="card-body">			
					<img class="card-img-top" src="{{ asset('imagenes/articulos/'.$art->imagen) }}" alt="" style="size: 10cm">
					<h5 class="card-title">Nombre: {{$art->nombre}}</h5>
					<h6 class="card-text">Precio: {{$art->stock}} bs.</h6>					
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ingresar">
						Comprar
					  </button>				
					<a data-toggle="modal" data-target="#modal-detalle-{{$art->id}}" class="btn btn-info">Detalle</a>	
				</div>
			</div>		
		</div>	
		@include('almacen.articulo.modalDetalle')		
		@endforeach
	</div>
</div>	
<br>
<div class="pagination justify-content-center">
	{{ $articulos->links() }}
</div>

<div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalCenterTitle">Aviso</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<h1>Se tiene que registrar o ingresar con su cuenta</h1>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		</div>
		</div>
	</div>
</div>
@endsection
@extends('tema.principal')
@section('contenido')

<hr>

<div class="row">
	@foreach($articulos as $art)
	<div class="col-sm-4">	
		<div class="card alert alert-primary" style="width: 18rem;">
			<div class="card-body">			
				<img class="card-img-top" src="{{$art->imagen}}" alt="" style="size: 10cm">
				<h5 class="card-title">Nombre: {{$art->nombre}}</h5><hr>
				<h6 class="card-text">Precio: {{$art->stock}} bs.</h6>
				<p class="card-text">Descripción: {{$art->descripcion}}</p>						
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
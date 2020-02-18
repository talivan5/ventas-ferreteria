@extends('tema.principal')
@section('contenido')

<hr>
<div id="categorias">
	<div class="row">
		<div class="col col-md-4">
			<h1>Categorias</h1>
			<div class="row col-md-12">	
				<div v-for="categoria in categorias" class="list-group" style="width: 200px;">
					<a href="#" @click="listarArticulos(categoria.id)" class="list-group-item list-group-item-action">@{{ categoria.nombre }}</a>
				</div>			
			</div>
		</div>
		<div class="row col col-md-8">
			
			<div class="col-md-6" v-for="articulo in articulos">	
				<div class="card alert alert-primary" style="width: 18rem;">
					<div class="card-body">			
						<img class="card-img-top" :src="'imagenes/articulos/'+ articulo.imagen" alt="" style="size: 10cm">
						<h5 class="card-title">Nombre: @{{articulo.nombre}}</h5>
						<h6 class="card-text">Precio: @{{articulo.stock}} bs.</h6>					
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ingresar">
							Comprar
						  </button>				
						<a data-toggle="modal" @click="abrirModal(articulo.id)" class="btn btn-info">Detalle</a>
					</div>
				</div>				
			</div>
		</div>
	</div>	
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
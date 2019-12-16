@extends('tema.layouts')
@section('contenido')
<br>
	<div class="row">
		<div class="col-md-8 col-xs-12">
			@include('almacen.articulo.search')
		</div>
		<div class="col-md-2">
			<a href="articulo/create" class="pull-right">
				<button class="btn btn-success">Crear</button>
			</a>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Slug</th>
						<th>Código</th>
						<th>Precio</th>						
						<th>Imágen</th>
						<th>Estado</th>
						<th width="180">Opciones</th>
					</thead>
					<tbody>
						<?php $index=1;?>
						@foreach($articulos as $art)
							<tr>
								<td>{{ $index }}</td>
								<td>{{ $art->nombre }}</td>
								<td>{{ $art->slug }}</td>
								<td>{{ $art->codigo }}</td>
								<td>{{ $art->stock }} bs.</td>
								
								<td>
									<img src="{{ asset('imagenes/articulos/'.$art->imagen) }}" alt="{{ $art->nombre }}" height="100" width="100" class="img-thumbnail">
								</td>
								<td>{{ $art->estado }}</td>
								<td>
									<a href="{{ route('articulo.edit', $art->id) }}">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="" data-target="#modal-delete-{{$art->id}}" data-toggle="modal">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						@include('almacen.articulo.modal')
						<?php $index++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="pagination justify-content-center">
				{{ $articulos->links() }}
			</div>
		</div>
	</div>

@endsection
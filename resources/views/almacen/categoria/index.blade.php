@extends('tema.layouts')
@section('contenido')
<br>
	<div class="row">
		<div class="col-md-8 col-xs-12">
			@include('almacen.categoria.search')
		</div>
		<div class="col-md-2">
			<a href="categoria/create" class="pull-right">
				<button class="btn btn-success">Crear</button>
			</a>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>N°</th>
						<th>Nombre</th>						
						<th>Descripción</th>
						<th width="180">Opciones</th>
					</thead>
					<tbody>						
						@foreach($categorias as $cat)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{ $cat->nombre }}</td>							
							<td>{{ $cat->descripcion }}</td>
							<td>
								<a href="{{ route('categoria.edit', $cat->id) }}">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@include('almacen.categoria.modal')
						
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="pagination justify-content-center">
				{{ $categorias->render() }}
			</div>
		</div>
	</div>

@endsection
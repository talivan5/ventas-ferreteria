@extends('tema.layouts')
@section('contenido')
<br>
	<div class="row">
		<div class="col-md-8 col-xs-12">
			@include('compras.proveedor.search')
		</div>
		<div class="col-md-2">
			<a href="proveedor/create" class="pull-right">
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
						<th>Tipo Documento</th>
						<th>Numero Documento</th>
						<th>Telefono</th>
						<th>Email</th>
						<th width="180">Opciones</th>
					</thead>
					<tbody>
						<?php $index=1;?>
						@foreach($personas as $per)
							<tr>
								<td>{{ $index }}</td>
								<td>{{ $per->nombre }}</td>
								<td>{{ $per->tipo_documento }}</td>
								<td>{{ $per->num_documento }}</td>
								<td>{{ $per->telefono }}</td>
								<td>{{ $per->email }}</td>
								<td>
									<a href="{{ route('proveedor.edit', $per->id) }}">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						@include('compras.proveedor.modal')
						<?php $index++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
		{{ $personas->render() }}
		</div>
	</div>

@endsection
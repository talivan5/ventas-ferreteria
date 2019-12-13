@extends('tema.layouts')
@section('contenido')
<br>
	<div class="row">
		<div class="col-md-8 col-xs-12">
			@include('cliente.buscarCategoria')
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
						<th>Descripción</th>						
					</thead>
					<tbody>
						@foreach($categorias as $cat)
						<tr>
							<td>{{ $cat->id }}</td>
							<td>{{ $cat->nombre }}</td>
							<td>{{ $cat->slug }}</td>
							<td>{{ $cat->descripcion }}</td>							
						</tr>			

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
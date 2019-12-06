@extends('tema.layouts')
@section('contenido')
<br>
	<div class="row">
		<div class="col-md-6 col-xs-12">
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			<form action="/almacen/categoria" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for="slug">Slug</label>
					<input type="text" name="slug" class="form-control" placeholder="slug">
				</div>
				<div class="form-group">
					<label for="descripcion">Descripción</label>
					<input type="text" name="descripcion" class="form-control" placeholder="Descripción">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">
						Guardar
					</button>
					<button class="btn btn-danger" type="reset">
						Cancelar
					</button>
				</div>
			</form>

		</div>
	</div>

@stop
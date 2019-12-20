@extends('tema.layouts')
@section('contenido')
<div class="container">
	<h1 style="text-align: center;">Registro del Cliente</h1>
    <form action="{{route('rcliente.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="{{ Auth::user()->name }}" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="apellidoM">Apellido Materno</label>
                    <input type="text" name="apellidoM" class="form-control" placeholder="apellidoM" value="{{ old('apellidoM') }}">
                </div>
                <div class="form-group">
                    <label for="apellidoP">Apellido Paterno</label>
                    <input type="text" name="apellidoP" class="form-control" placeholder="apellidoP" value="{{ old('apellidoP') }}"> 
                </div>                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" class="form-control" placeholder="direccion" value="{{ old('direccion') }}">
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" class="form-control" placeholder="celular" value="{{ old('celular') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="email" value="{{ Auth::user()->email }}" readonly="readonly"> 
                </div>                
            </div>
        </div>
        <button class="btn btn-success" type="submit">
            <i class="fa fa-save" aria-hidden="true">Guardar</i>
        </button>
    </form>
</div>
@endsection
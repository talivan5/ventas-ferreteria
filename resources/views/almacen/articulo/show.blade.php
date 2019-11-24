@extends('layouts.admin')

@section('header')
	
@endsection

@section('content')

<h1><i class="fa fa-cart-plus"></i>Detalle del Articulo</h1>
       
<div class="card alert alert-primary" style="width: 18rem;">
  <img class="card-img-top" src="{{ asset('imagenes/articulos/'.$articulos->imagen) }}" alt="" style="size: 10cm">
    <div class="card-body">
      <h5 class="card-title">Nombre:</h5><h6>{{$articulos->nombre}}</h6><hr>
      <h5 class="card-text">Precio: {{$articulos->stock}} bs.</h5>
      <p class="card-text">Descripción: {{$articulos->descripcion}}</p>
      <a href="{{ route('cart-add',$articulos->slug) }}" class="btn btn-primary">Comprar</a>
      <a href="{{ route('home') }}" class="btn btn-success">Volver</a>
    </div>              
</div> 
    
    
        

@endsection
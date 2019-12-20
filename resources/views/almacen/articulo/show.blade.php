@extends('tema.layouts')
@section('contenido')

<h1><i class="fa fa-cart-plus"></i>Detalle del Articulo</h1>
       
<div class="card alert alert-primary" style="width: 18rem;">
  <img class="card-img-top" src="{{ $articulos->imagen }}" alt="" style="size: 10cm">
    <div class="card-body">
      <h5 class="card-title">Producto:</h5><h6>{{$articulos->nombre}}</h6><hr>
      <h5 class="card-text">Precio: {{$articulos->stock}} bs.</h5>
      <p class="card-text">Descripción: {{$articulos->descripcion}}</p>
      <a href="{{ route('cart-add',$articulos->slug) }}" class="btn btn-primary">Comprar</a>
      <a href="{{ route('inicio') }}" class="btn btn-success">Volver</a>
    </div>              
</div> 
    
    
        

@endsection
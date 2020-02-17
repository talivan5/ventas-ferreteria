@extends('tema.layouts')
@section('contenido')
<style>
	.inner {
	  overflow: hidden;
  }
  
  .inner img {
	  transition: all 1s ease;
    border: 2em solid crimson;
  }
  
  .inner:hover img {
	  transform: scale(1.5);
  }
  .texto{
    text-align: center;
    margin-top: 2px;
    margin-bottom: 20px;
  }
  .alinear-izquierda{
    float: left;
    margin-top: 50px;
  }
  .alinear-derecha{
    float: right;
    margin-top: 50px;
  }
</style>
<div class="texto">
  <h1><i class="fa fa-cart-plus"></i>Detalle del Articulo</h1>
</div>
<div class="row">
    <div class="inner col col-md-6">
      <img class="card-img-top" src="{{ asset('imagenes/articulos/'.$articulos->imagen) }}" alt="" style="size: 10cm">
    </div>
    <div class="col col-md-6">
      <h5 class="card-title">Producto:</h5><h6>{{$articulos->nombre}}</h6><hr>
      <h5 class="card-text">Precio: {{$articulos->stock}} bs.</h5>
      <h5 >Descripción:</h5><span>{{$articulos->descripcion}}</span>
      <br>
      <div class="alinear-izquierda">
        <a href="{{ route('cart-add',$articulos->slug) }}" class="btn btn-primary">Comprar</a>
      </div>
      <div class="alinear-derecha">
        <a href="{{ route('inicio') }}" class="btn btn-success">Volver</a>
      </div> 
    </div>              
</div>    
@endsection
@extends('tema.layouts')
@section('contenido')
<div class="container text-center">

   <div class="page-header">
      <h1><i class="fa fa-shopping-cart"></i>Carrito de Compra</h1>
    </div>
    @if(count($cart))
    <p>
        <a href="{{ route('cart-trash') }}" class="btn btn-danger">
        Vaciar Carrito <i class="fa fa-trash"></i>
        </a>
    </p>

    <div class="table-responsive">      
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Subtotal</th>
                    <th>Quitar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                    <tr>
                        <th><img class="card-img-top" src="{{$item->imagen}}" alt="" style="width: 30%"></th>
                        <th>{{$item->nombre}}</th>
                        <th>{{$item->stock}}</th>
                        <th>
                            <input 
                                    type="number"
                                    min="1"
                                    max="100"
                                    value="{{ $item->cantidad }}"
                                    id="articulo_{{ $item->id }}"
                            >
                            <a 
                                    href="#"
                                    class="btn btn-warning btn-update-item"
                                    data-href="{{ route('cart-update', $item->slug) }}"
                                    data-id="{{ $item->id }}"                                    
                            >
                                    <i class="fa fa-refresh"></i>
                            </a>
                        </th>
                        <th>{{$item->descripcion}}</th>
                        <th>{{$item->stock * $item->cantidad}}</th>
                        <th><a class="btn btn-danger" href=" {{ route('cart-delete',$item->slug) }} "><i class="fa fa-remove"></i></a> </th>
                    </tr>
                @endforeach
            </tbody>

        </table><hr>

        <h3>
            <span class="label label-success">
                Total: {{$total}} Bs. 
            </span>
        </h3>

    </div>
    @else 
        <h3><span class="label label-warning">No hay productos en el carrito :-(</span></h3>
    @endif
    <hr>
    <p>
        <a href="{{route('inicio')}}" class="btn btn-primary">
            <i class="fa fa-chevron-circle-left"></i>Seguir Comprando
        </a>
        <a href="{{ route('order-detail')}}" class="btn btn-primary">
            continuar<i class="fa fa-chevron-circle-right"></i>
        </a>
    </p>
</div>






@endsection
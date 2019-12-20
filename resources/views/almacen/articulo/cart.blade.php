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
    <form action="{{route('cart-show')}}" method="POST">
        {{ csrf_field() }}
        <div class="table-responsive">      
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>                                     
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Subtotal</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td>{{ Auth::user()->name }}</td>
                            <td><input type="text"  style="width: 200px;" name="nombreProducto" value="{{$item->nombre}}" readonly="readonly"></td>
                            <td><input type="text"  style="width: 80px;" name="precio" value="{{$item->stock}}" readonly="readonly"></td>
                            <td>
                                <input 
                                        style="width: 100px;"
                                        type="number"
                                        min="1"
                                        max="100"
                                        value="{{ $item->cantidad }}"
                                        id="articulo_{{ $item->id }}"
                                        name="cantidad"
                                >
                                <a 
                                        href="#"
                                        class="btn btn-warning btn-update-item"
                                        data-href="{{ route('cart-update', $item->slug) }}"
                                        data-id="{{ $item->id }}"                                    
                                >
                                        <i class="fa fa-refresh"></i>
                                </a>
                            </td>
                            <td>
                                <textarea type="text"  name="descripcion" readonly="readonly">{{$item->descripcion}}</textarea>
                            </td>
                            <td>
                                <input type="text"  style="width: 80px;" name="subtotal" value="{{$item->stock*$item->cantidad}}" readonly="readonly">
                            </td>
                            <td>
                                <a class="btn btn-danger" href=" {{ route('cart-delete',$item->slug) }} "><i class="fa fa-remove"></i></a>
                                <button class="btn btn-success" type="submit">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </button>
                            </td>
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
    </form>
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
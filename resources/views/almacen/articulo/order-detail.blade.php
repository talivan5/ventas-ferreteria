@extends('layouts.admin')

@section('header')
	
@endsection

@section('content')

<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart">Detalle del Pedido</i></h1>
    </div>
    <h3>Datos del pedido</h3>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Poducto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
        @foreach ($cart as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->stock}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->stock*$item->cantidad}}</td>
            </tr>
        @endforeach
    </table><hr>
    <h3>
        <span class="label label-success">
            Total: {{$total}}Bs.
        </span>
    </h3><hr>
    <p>
        <a href="{{route('cart-show')}}" class="btn btn-warning">
            <i class="fa fa-chevron-circle-left fa-2x"></i>Regresar
        </a>
        <a href="https://www.paypal.com/ar/signin" class="btn btn-primary">
            Pagar con <i class="fa fa-cc-paypal fa-2x"></i>
        </a>
    </p>

</div>



@endsection
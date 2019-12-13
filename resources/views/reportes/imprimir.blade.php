<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Comprobante</title>
</head>
<body>       
    
<div class="container text-center">

<div class="page-header">
    <h1><i class="fa fa-shopping-cart">Detalle del Pedido</i></h1>
</div>
                            
    @foreach ($cart as $item)        
        <form method="POST">
            @csrf
            <hr> 
            <h3>Datos del Cliente</h3>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="{{ Auth::user()->email }}" value="{{ Auth::user()->email }}">
                </div>
            </div> 
            <hr> 
            <h3>Datos del Producto</h3>
            <hr> 
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Poducto</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="{{$item->nombre}}" value="{{$item->nombre}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="{{$item->stock}}" value="{{$item->stock}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="{{$item->cantidad}}" value="{{$item->cantidad}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Subtotal</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="{{$item->stock*$item->cantidad}}" value="{{$item->stock*$item->cantidad}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Total a pagar</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="{{$total}}" value="{{$total}}Bs.">
                </div>
            </div>
            {{-- <a href="{{route('guardar',$item)}}" class="btn btn-info">
            <i class="fa fa-save fa-2x" aria-hidden="true"></i>
            Guardar compra</a> --}}
        </form>
    @endforeach              

</div>
</body>
</html>


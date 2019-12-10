<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Comprobante</title>
</head>
<body>       
    
        <div class="container text-center">
               
                <div class="page-header">
                    <h1><i class="fa fa-shopping-cart">Detalle del Pedido</i></h1>
                </div>
                <h3>Datos del pedido</h3>
                <p><span>Nombre:</span>{{ Auth::user()->name }}</p>
                <p><span>Email:</span>{{ Auth::user()->email }}</p>
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
                
            
            </div>
</body>
</html>


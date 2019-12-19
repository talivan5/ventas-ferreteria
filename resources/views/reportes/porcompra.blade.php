<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <style>
      table {
      width: 100%;      
    }
    th, td {
      width: 25%;
      border: 2px blue;
      border: red 2px solid;
    }
    h1,h3{
      text-align: center;
      background-color: aqua;
    }
    .qr{
        float: right;
        width: 15%; 
        padding: 10px;
    }
 </style>
    <title>Comprobante</title>
</head>
<body>   
    <div class="qr">
        {!!DNS2D::getBarcodeHTML("ferreteria flowers", "QRCODE",2,2)!!}
    </div>     
    <br>
<div class="container text-center">

<div class="page-header">
    <h1>Detalle de la Compra</h1>
    
</div>
<br>
<hr>
<table class="table">
    <thead class="thead-dark">
      <tr style="background-color: aqua;">
         <th scope="col" colspan="5"><h3>Producto vendidos</h3></th>     
      </tr>     
      <tr>
        <th scope="col">N°</th>
        <th scope="col">nombre usuario</th>    
        <th scope="col">Producto</th>
        <th scope="col">Codigo</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Sub Total</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
        <tbody>
            @foreach ($detallesql as $detalles)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$detalles->name}}</td>
                <td>{{$detalles->nombre}}</td>  
                <td>{{$detalles->codigo}}</td>
                <td>{{$detalles->cantidad}}</td>
                <td>{{$detalles->subtotal}}</td>
                <td>{{$detalles->total}}</td>
            </tr>
            @endforeach						
        </tbody>
    </tbody>
  </table>                         
          
            {{-- <a href="{{route('guardar',$item)}}" class="btn btn-info">
            <i class="fa fa-save fa-2x" aria-hidden="true"></i>
            Guardar compra</a> --}}
</div>
</body>
</html>


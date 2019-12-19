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
      align-content: flex-end;
      
      border: 2px red solid;
      float: center;
    }
 </style>
    <title>Comprobante</title>
</head>
<body>      
  <div>
    {!!DNS2D::getBarcodeHTML(335553, 'QRCODE')!!}</div>
  </div> 
    <br>
<div class="container text-center">

<div class="page-header">
    <h1>Detalle de la Compra</h1>
    
</div>

<table class="table">
    <thead class="thead-light">
        <tr style="background-color: aqua;">
        <th scope="col" colspan="4"><h3>Datos del Cliente</h3></th>     
        </tr>
    </thead>
    <tbody>
        <tr>
          <td> Nombre:</td>
          <td style="text-align: left" colspan="3">{{ Auth::user()->name }}</td>
        </tr>
        <tr>
          <td scope="row">Email:</td>
          <td style="text-align: left" colspan="3">{{ Auth::user()->email }}</td>
        </tr>      
        <tr>
          <td scope="row">Fecha:</td>
          <td style="text-align: left">{{ $time->format('Y-m-d') }}</td>
          <td scope="row">Hora:</td>
          <td style="text-align: left">{{ $time->format('H-i') }}</td>
        </tr>             
    </tbody>
</table>
<br>
<hr>
<table class="table">
    <thead class="thead-dark">
      <tr style="background-color: aqua;">
         <th scope="col" colspan="5"><h3>Datos de los Productos</h3></th>     
      </tr>     
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Subtotal</th>
      </tr>
    </thead>
    <?php $index=1; ?>
    @foreach ($cart as $item) 
    <tbody>
      <tr>
        <th scope="row">{{$index}}</th>
        <td>{{$item->nombre}}</td>
        <td>{{$item->stock}}</td>
        <td>{{$item->cantidad}}</td>
        <td>{{$item->stock*$item->cantidad}}</td>
      </tr>    
      <tr class="table-danger">
          <td colspan="4">Total a pagar:</td>
          <td>{{$total}}Bs.</td>
      </tr>
    </tbody>
    <?php $index++;?>
    @endforeach 
  </table>                         
          
            {{-- <a href="{{route('guardar',$item)}}" class="btn btn-info">
            <i class="fa fa-save fa-2x" aria-hidden="true"></i>
            Guardar compra</a> --}}
</div>
</body>
</html>


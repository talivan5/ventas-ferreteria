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
  
<div class="container text-center">

<div class="page-header">
    <h1>Clientes que mas compraron</h1>
    
</div>

<br>
<hr>
<table class="table">
    <thead class="thead-dark">
      <tr style="background-color: aqua;">
         <th scope="col" colspan="5"><h3>Datos de los Productos</h3></th>     
      </tr>     
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Articulo</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Subtotal</th>
      </tr>
    </thead>
   
  </table>                         
          
            {{-- <a href="{{route('guardar',$item)}}" class="btn btn-info">
            <i class="fa fa-save fa-2x" aria-hidden="true"></i>
            Guardar compra</a> --}}
</div>
</body>
</html>


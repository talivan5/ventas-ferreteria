<!DOCTYPE html>
<html lang="en">
<head>
        
    <style>
        .imagen {
            page-break-after: always;
            width: 50px;
            height: 50px;
            border: 2px;
            border-radius: 25px;
        }
    </style>

</head>
<body>
    <table border="2px;">
        <thead>
            <tr>
                <th colspan="4" style="text-align: center;">
                    <h1>Lista de Productos</h1>
                </th>
                
            </tr>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulo as $articulos)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$articulos->nombre}}</td>
                <td>{{$articulos->stock}}</td>  
                <td>{{$articulos->descripcion }}</td>                         							
            </tr>
            @endforeach						
        </tbody>
    </table>
</body>
</html>
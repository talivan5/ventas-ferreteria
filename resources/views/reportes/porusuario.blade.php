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
    <img class="imagen" src="./image/ferreteria-3.jpg" alt="">

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($user as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->active}}</td>               							
            </tr>
            @endforeach						
        </tbody>
    </table>
</body>
</html>
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

    <table class="table" border="2px;">
        <thead>
            <tr style="background-color: aqua;">
                <th colspan="5" style="text-align: center;">
                    <h1>Lista de los Usuario</h1>
                </th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($user as $usuario)
            <tr>
                <td>{{$loop->iteration}}</th>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->description}}</td>
                             							
            </tr>
            @endforeach						
        </tbody>
    </table>
</body>
</html>
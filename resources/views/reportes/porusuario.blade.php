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
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <img class="imagen" src="./image/ferreteria-3.jpg" alt="">

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody >
                <?php $index=1; ?>
            @foreach ($user as $usuario)
            <tr>
                <td>{{$index}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->active}}</td>               							
            </tr>
            <?php $index++;?>
            @endforeach						
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Alumnos</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Numero de control</td>
            </tr>
        </thead>
        <tbody> 
            <tr>
                <td>{{$nombre}}</td>
                <td>{{$edad}}</td>
                <td>{{$numero_control}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
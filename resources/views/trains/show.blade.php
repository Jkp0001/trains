<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Trenes</title>
</head>
<body>
    <p><b>Nombre </b>{{ $train -> name}}</p>
    <p><b>Pasajeros: </b>{{ $train -> passengers}}</p>
    <p><b>Fecha: </b>{{ $train -> year}}</p>
    <p><b>Tipo de ticket: </b>{{ $train -> trainType -> type}}</p>
</body>
</html>
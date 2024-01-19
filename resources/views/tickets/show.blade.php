<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Tickets</title>
</head>
<body>
    <p><b>Fecha: </b>{{ $ticket -> date}}</p>
    <p><b>Precio: </b>{{ $ticket -> price}}</p>
    <p><b>Nombre del tren: </b>{{ $ticket -> train -> name}}</p>
    <p><b>Tipo de ticket: </b>{{ $ticket -> ticketType -> type}}</p>
</body>
</html>
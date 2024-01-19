<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tipos de Ticket</title>
</head>
<body>
    <form action="{{ route('ticketsType.update', ['ticketsType' => $ticketType -> id]) }}" method="post">
    
    @csrf {{-- formulario con post -> --}}  

    {{ method_field('PUT') }} {{-- Pa engañar al HTML --}}

    <label>Tipo de ticket</label>
    <input type="text" name="ticket_types" value="{{ $ticketType -> type}}">
    <br>
    <input type="submit" value="Editar">

    </form>
</body>
</html>
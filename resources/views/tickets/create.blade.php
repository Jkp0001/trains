<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear un nuevo ticket</title>
</head>
<body>
    <form action="{{ route('tickets.store') }}" method="post">
    {{-- formulario con post -> --}}   
    @csrf

    <label>Fecha</label>
    <input type="date" name="Fecha">
    <br><br>
    <label>Precio</label>
    <input type="number" name="Precio">
    <br><br>

    <label for="">Tipo de Ticket</label>
    <select name="ticket_type_id" id="ticket_type_id">
        @foreach ($ticketTypes as $ticketTipo)
            <option value="{{ $ticketTipo -> id }}">{{ $ticketTipo -> type }}</option>
        @endforeach
    </select>

    <label>Nombre del Tren</label>
    <select name="train_id" id="train_id">
        @foreach ($trains as $trainTipo)
            <option value="{{ $trainTipo -> id }}">{{ $trainTipo -> name }}</option>
        @endforeach
    </select>
    
    

    <input type="submit" value="Crear">

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Trenes</title>
</head>
<body>
    <form action="{{ route('tickets.update', ['ticket' => $tickets -> id]) }}" method="post">
    
    @csrf {{-- formulario con post -> --}}  

    {{ method_field('PUT') }} {{-- Pa engañar al HTML --}}

    <label>Fecha</label>
    <input type="date" name="fecha" value="{{ $tickets -> date}}">
    <br><br>
    <label>Precio</label>
    <input type="number" name="price" value="{{ $tickets -> price }}">
    <br><br>
    <label>Nombre del tren</label>
    <select name="name" id="">
        @foreach ($trains as $train)
        <option value="{{ $train -> id }}" @php if($train -> id == $tickets -> train_id) echo"selected"; @endphp>
            {{ $train -> name }}
        </option>
        @endforeach
    </select>    
    <br><br>
    <label>Tipo de Ticket</label>
    <select name="tipodeTicket" id="">
        @foreach ($ticketTypes as $ticketType)
        <option value="{{ $ticketType -> id }}" @php if($ticketType -> id == $tickets -> ticket_type_id) echo"selected"; @endphp>
            {{ $ticketType -> type }}
        </option>
        @endforeach
    </select>
    <input type="submit" value="Editar">

    </form>
</body>
</html>
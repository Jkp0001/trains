<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎟️Tickets🎟️</title>
</head>
<style>
    nav{
        text-align: center;
    }
    .menu{
        background-color: grey;
        color: white; 
    }
</style>
<body>
    <nav>
        <button class="menu"><a href="{{Route("tickets.index")}}">Tickets</a></button>
        <button class="menu"><a href="{{Route("trains.index")}}">Trains</a></button>
        <button class="menu"><a href="{{Route("ticketsType.index")}}">Tickets Type</a></button>
        <button class="menu"><a href="{{Route("trainsType.index")}}">Trains Type</a></button>
    </nav>
    <table>
        <thead>
            <tr>
                <th> Fecha del ticket </th>
                <th> Precio </th>
                <th> Nombre del tren </th>
                <th> Tipo de ticket </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                    <td>{{ $ticket -> date }}</td>
                    <td>{{ $ticket -> price }} €</td>
                    <td>{{ $ticket -> train -> name}}</td>
                    <td>{{ $ticket -> ticketType -> type}}</td>
                    <td>
                        <form action="{{ route('tickets.show', ['ticket' => $ticket -> id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('tickets.edit', ['ticket' => $ticket -> id]) }}" method="get"> 
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('tickets.destroy', ['ticket' => $ticket -> id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>

        <div>
            <form action="{{ route('tickets.create', ['ticket' => $ticket -> id]) }}" method="get">
                <input type="submit" value="Crear Ticket">
            </form>
        </div>
    </table>
</body>

</html>
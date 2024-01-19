<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚆Trenes🚆</title>
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
                <th>Tren</th>
                <th>Pasajeros</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $tren)
            <tr>
                <td>{{ $tren -> name }}</td>
                <td>{{ $tren -> passengers }}</td>
                <td>{{ $tren -> year }}</td>
                <td>
                    <form action="{{ route('trains.show', ['train' => $tren -> id]) }}" method="get"> 
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="{{ route('trains.edit', ['train' => $tren -> id]) }}" method="get"> 
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="{{ route('trains.destroy', ['train' => $tren -> id]) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <form action="{{ route('trains.create', ['trains' => $tren -> id]) }}" method="get">
            <input type="submit" value="Crear Tren">
        </form>
    </div>

</body>

</html>
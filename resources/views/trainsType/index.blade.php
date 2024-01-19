<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrenType</title>
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
                <th> Tipos de Tren </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($trainTypes as $trainType)
            <tr>
                    <td>{{ $trainType -> type }}</td>
                    <td>
                        <form action="{{ route('trainsType.show', ['trainsType' => $trainType -> id]) }}" method="get">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trainsType.edit', ['trainsType' => $trainType -> id]) }}" method="get"> 
                            <input type="submit" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('trainsType.destroy', ['trainsType' => $trainType -> id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar">
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>

        <div>
            <form action="{{ route('trainsType.create', ['trainsType' => $trainType -> id]) }}" method="get">
                <input type="submit" value="Crear tipo de tren">
            </form>
        </div>
    </table>
</body>

</html>
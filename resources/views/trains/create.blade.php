<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear un nuevo Tren</title>
</head>
<body>
    <form action="{{ route('trains.store') }}" method="post">
    {{-- formulario con post -> --}}   
    @csrf

    <label>Nombre</label>
    <input type="text" name="Nombre">
    <br><br>
    <label>Pasajeros</label>
    <input type="number" name="Passengers">
    <br><br>
    <label>Año</label>
    <input type="date" name="year">
    <br><br>
    
    <label>Tipo de Tren</label>
    <select name="train_type_id" id="train_type_id">
        @foreach ($trainTypes as $trainTipo)
            <option value="{{ $trainTipo -> id }}">{{ $trainTipo -> type }}</option>
        @endforeach
    </select>
    

    <input type="submit" value="Crear">

    </form>
</body>
</html>
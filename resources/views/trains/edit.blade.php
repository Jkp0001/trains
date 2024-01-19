<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Trenes</title>
</head>
<body>
    <form action="{{ route('trains.update', ['train' => $train -> id]) }}" method="post">
    
    @csrf {{-- formulario con post -> --}}  

    {{ method_field('PUT') }} {{-- Pa engañar al HTML --}}

    <label>Nombre</label>
    <input type="text" name="Nombre" value="{{ $train -> name}}">
    <br><br>
    <label>Pasajeros</label>
    <input type="number" name="Passengers" value="{{ $train -> passengers }}">
    <br><br>
    <label>Fecha</label>
    <input type="date" name="year" value="{{ $train -> year}}">
    <br><br>
    <label>Tipo de Tren</label>
    <select name="tipodeTren" id="">
        @foreach ($trainTypes as $trainType)
        <option value="{{ $trainType -> id }}" @php if($trainType -> id == $train -> train_type_id) echo"selected"; @endphp>
            {{ $trainType -> type }}
        </option>
        @endforeach
{{-- Undefined variable $trainTypes--}}    
    </select>
    <input type="submit" value="Editar">

    </form>
</body>
</html>
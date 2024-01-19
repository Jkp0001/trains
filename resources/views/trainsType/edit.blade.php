<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tipos de Tren</title>
</head>
<body>
    <form action="{{ route('trainsType.update', ['trainsType' => $trainType -> id]) }}" method="post">
    
    @csrf {{-- formulario con post -> --}}  

    {{ method_field('PUT') }} {{-- Pa engañar al HTML --}}

    <label>Tipo de Tren</label>
    <input type="text" name="trains_type" value="{{ $trainType -> type}}">
    <br>
    <input type="submit" value="Editar">

    </form>
</body>
</html>
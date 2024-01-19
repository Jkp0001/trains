<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear un nuevo tipo de Ticket</title>
</head>
<body>
    <form action="{{ route('ticketsType.store') }}" method="post">
    {{-- formulario con post -> --}}   
    @csrf

    <label>Tipo de Ticket</label>
    <input type="text" name="Tipo">
    <br><br>

    <input type="submit" value="Crear">

    </form>
</body>
</html>
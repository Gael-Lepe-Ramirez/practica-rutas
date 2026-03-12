<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Información de contacto</h1>
    <p>
        <a href="{{ route('contactos.index') }}">Volver a la lista de contactos</a>
    </p>
    <ul>
        <li><strong>Nombre:</strong> {{ $contacto->nombre }}</li>
        <li><strong>Correo:</strong> {{ $contacto->correo }}</li>
        <li><strong>Mensaje:</strong> {{ $contacto->mensaje }}</li>
    </ul>
    <p>
        <a href="{{ route('contactos.edit', $contacto) }}">Editar</a>
        <form action="{{ route('contactos.destroy', $contacto) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista Contactos</h1>

    <p>
        <a href="{{ route('contactos.create') }}">Enviar nuevo mensaje de contacto</a>
    </p>

    <ul>
        @foreach ($contactos as $contacto)
            <li>
                <a href="{{ route('contactos.show', $contacto) }}">{{ $contacto->nombre }}</a> - {{ $contacto->correo }}
            </li>
        @endforeach
    </ul>
</body>
</html>
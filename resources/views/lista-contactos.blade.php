<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>
    <ul>
        @foreach($contactos as $contacto)
            <li>
                {{ $contacto->nombre }} - {{ $contacto->correo }}
            </li>
        @endforeach
    </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <style>
        input[type="text"],
        input[type="email"],
        textarea {
            width: 350px;
            padding: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Editar Formulario de Contacto</h1>

    <p>
        <a href="{{ route('contactos.index') }}">Volver a la lista de contactos</a>
    </p>

    <form action="{{ route('contactos.update', $contacto) }}" method="POST">
        @csrf
        @method('PATCH') <table border="0">
            <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') ?? $contacto->nombre }}">
                    @error('nombre')
                        <div style="color: red; font-size: 0.8em;">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="correo">Correo:</label></td>
                <td>
                    <input type="email" id="correo" name="correo" value="{{ old('correo') ?? $contacto->correo }}">
                    @error('correo')
                        <div style="color: red; font-size: 0.8em;">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="mensaje">Mensaje:</label></td>
                <td>
                    <textarea id="mensaje" name="mensaje" rows="4">{{ old('mensaje') ?? $contacto->mensaje }}</textarea>
                    @error('mensaje')
                        <div style="color: red; font-size: 0.8em;">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Actualizar"> 
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
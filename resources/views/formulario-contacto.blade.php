<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
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
    <h1>Formulario de Contacto</h1>
    
    <form action="/recibe-formulario" method="POST">
        @csrf
        
        <table border="0">
            <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input type="text" id="nombre" name="nombre" required></td>
            </tr>
            <tr>
                <td><label for="correo">Correo:</label></td>
                <td><input type="email" id="correo" name="correo" required></td>
            </tr>
            <tr>
                <td><label for="mensaje">Mensaje:</label></td>
                <td><textarea id="mensaje" name="mensaje" rows="4"></textarea></td>
            </tr>
            <tr>
                <td></td> 
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
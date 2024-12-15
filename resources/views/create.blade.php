<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Vehículo</title>
</head>
<body>
    <h1>Agregar Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <label>Categoría:</label>
    <input type="text" name="categoria" required>
    <br>
    <label>Descripción:</label>
    <textarea name="descripcion_vehiculo" required></textarea>
    <br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>

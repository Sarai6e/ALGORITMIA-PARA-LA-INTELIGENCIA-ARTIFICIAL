<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería - Compra de Productos</title>
</head>
<body>
    <h1>Productos en Venta</h1>
    <form action="procesar_compra.php" method="post">
        <select name="producto_id">
            <?php
            // Conexión a la base de datos
            $conexion = mysqli_connect("localhost", "", "", "el_tornillo_feliz");

            // Consulta para obtener los productos disponibles
            $consulta = "SELECT id, nombre, precio FROM productos WHERE stock > 0";
            $resultado = mysqli_query($conexion, $consulta);

            // Mostrar los productos en un dropdown
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . " - $" . $fila['precio'] . "</option>";
            }

            // Cerrar conexión
            mysqli_close($conexion);
            ?>
        </select>
        <input type="submit" value="Comprar">
    </form>
</body>
</html>

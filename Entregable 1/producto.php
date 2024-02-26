<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería - Compra de Productos</title>
</head>
<body>
    <h1>Productos en Venta</h1>

    <!-- Sección para buscar producto -->
    <h2>Buscar Producto</h2>
    <form action="buscar_producto.php" method="get">
        <input type="text" name="q" placeholder="Buscar producto">
        <input type="submit" value="Buscar">
    </form>

    <hr>

    <!-- Sección para seleccionar productos -->
    <h2>Seleccionar Producto</h2>
    <form action="seleccionar_producto.php" method="post">
        <select name="producto_id">
            <?php
            // Conexión a la base de datos
            $conexion = mysqli_connect("localhost", "root", "", "el_tornillo_feliz");

            // Consulta para obtener los productos disponibles
            $consulta = "SELECT id, nombre, precio, stock FROM productos WHERE stock > 0";
            $resultado = mysqli_query($conexion, $consulta);

            // Mostrar los productos en un dropdown
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . " - $" . $fila['precio'] . "</option>";
            }

            // Cerrar conexión
            mysqli_close($conexion);
            ?>
        </select>
        <input type="number" name="cantidad" placeholder="Cantidad">
        <input type="submit" value="Agregar al carrito">
    </form>

    <hr>

    <!-- Sección de confirmación y pago -->
    <h2>Confirmar y Pagar</h2>
    <form action="confirmar_pago.php" method="post">
        <!-- Aquí se mostrarán los productos seleccionados y su cantidad -->
        <input type="submit" value="Confirmar y Pagar">
    </form>
</body>
</html>


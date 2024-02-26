<?php
// Iniciar sesión (si no está iniciada)
session_start();

// Mostrar los productos seleccionados y su cantidad
echo "<h2>Productos en tu carrito:</h2>";
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $producto_id => $cantidad) {
        // Consultar información del producto desde la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "el_tornillo_feliz");
        $consulta = "SELECT nombre, precio FROM productos WHERE id = $producto_id";
        $resultado = mysqli_query($conexion, $consulta);
        $producto = mysqli_fetch_assoc($resultado);
        echo "Producto: " . $producto['nombre'] . " - Cantidad: " . $cantidad . " - Precio: $" . $producto['precio'] . "<br>";
        mysqli_close($conexion);
    }
} else {
    echo "Tu carrito está vacío.";
}

// Aquí podrías agregar el formulario de pago y la lógica para procesar la transacción
?>

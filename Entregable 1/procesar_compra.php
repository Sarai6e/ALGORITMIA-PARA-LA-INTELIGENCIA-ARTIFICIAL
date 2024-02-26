<?php
// Obtener el ID del producto seleccionado
$producto_id = $_POST['producto_id'];

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "el_tornillo_feliz");

// Consulta para obtener la información del producto seleccionado
$consulta_producto = "SELECT nombre, precio, stock FROM productos WHERE id = $producto_id";
$resultado_producto = mysqli_query($conexion, $consulta_producto);
$producto = mysqli_fetch_assoc($resultado_producto);

// Verificar si hay suficiente stock
if ($producto['stock'] > 0) {
    // Restar uno al stock del producto
    $nuevo_stock = $producto['stock'] - 1;
    $actualizar_stock = "UPDATE productos SET stock = $nuevo_stock WHERE id = $producto_id";
    mysqli_query($conexion, $actualizar_stock);

    // Mensaje de compra exitosa
    echo "¡Compra realizada con éxito!<br>";
    echo "Producto: " . $producto['nombre'] . "<br>";
    echo "Precio: $" . $producto['precio'];
} else {
    // Mensaje de error si no hay stock suficiente
    echo "Lo sentimos, este producto está agotado.";
}

// Cerrar conexión
mysqli_close($conexion);
?>

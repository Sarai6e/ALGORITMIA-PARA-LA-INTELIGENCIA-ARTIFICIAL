<?php
// Obtener el término de búsqueda enviado por el usuario
$busqueda = $_GET['q'];

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "el_tornillo_feliz");

// Consulta para buscar productos que coincidan con el término de búsqueda
$consulta = "SELECT id, nombre, precio, stock FROM productos WHERE nombre LIKE '%$busqueda%' AND stock > 0";
$resultado = mysqli_query($conexion, $consulta);

// Mostrar resultados de la búsqueda
echo "<h2>Resultados de la búsqueda para '$busqueda'</h2>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Producto: " . $fila['nombre'] . " - $" . $fila['precio'] . " - Stock: " . $fila['stock'] . "<br>";
}

// Cerrar conexión
mysqli_close($conexion);
?>

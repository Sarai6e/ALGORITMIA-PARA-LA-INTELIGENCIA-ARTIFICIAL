<?php
// Verificar si se han enviado datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $buscar_producto = $_POST['buscar_producto'] ?? '';
    $seleccionar_producto = $_POST['seleccionar_producto'] ?? '';
    $confirmar_compra = isset($_POST['confirmar_compra']) ? 'Sí' : 'No';
    $datos_pago = $_POST['datos_pago'] ?? '';

    // Aquí puedes realizar acciones como validar los datos, procesar la compra, guardar información en la base de datos, etc.
    
    // Ejemplo de salida de datos recibidos
    echo "<h2>Datos recibidos:</h2>";
    echo "<p>Buscar producto: $buscar_producto</p>";
    echo "<p>Seleccionar producto: $seleccionar_producto</p>";
    echo "<p>Confirmar compra: $confirmar_compra</p>";
    echo "<p>Datos de pago: $datos_pago</p>";
} else {
    // Si no se han enviado datos por el formulario, redireccionar al formulario de compra
    header("Location: formulario_compra.php");
    exit();
}
?>

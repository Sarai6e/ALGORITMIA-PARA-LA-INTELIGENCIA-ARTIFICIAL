<?php
// Obtener el ID del producto seleccionado y la cantidad
$producto_id = $_POST['producto_id'];
$cantidad = $_POST['cantidad'];

// Iniciar sesión (si no está iniciada)
session_start();

// Agregar el producto seleccionado al carrito de compras
$_SESSION['carrito'][$producto_id] = $cantidad;

// Redireccionar al usuario de vuelta a la página principal
header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra en Ferretería</title>
</head>
<body>

    <h1>Compra en Ferretería</h1>

    <form action="procesar_compra.php" method="POST">
        <!-- Buscar Producto -->
        <div>
            <label for="buscar_producto">Buscar producto:</label>
            <input type="text" id="buscar_producto" name="buscar_producto" placeholder="Ingrese el producto que desea buscar">
        </div>

        <!-- Seleccionar Producto -->
        <div>
            <label for="seleccionar_producto">Seleccionar producto:</label>
            <select id="seleccionar_producto" name="seleccionar_producto">
                <option value="martillo">Martillo</option>
                <option value="destornillador">Destornillador</option>
                <option value="sierra">Sierra</option>
                <option value="taladro">Taladro</option>
            </select>
        </div>

        <!-- Compra Producto -->
        <div>
            <label for="confirmar_compra">Confirmar compra:</label>
            <input type="checkbox" id="confirmar_compra" name="confirmar_compra">
        </div>

        <!-- Ingresar Datos de Pago -->
        <div>
            <label for="datos_pago">Ingresar datos de pago:</label><br>
            <textarea id="datos_pago" name="datos_pago" rows="4" cols="50" placeholder="Ingrese los datos de pago"></textarea>
        </div>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>

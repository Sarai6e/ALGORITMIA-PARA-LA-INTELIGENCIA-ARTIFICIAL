<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configuración de la conexión a la base de datos
    $servername = "localhost"; // Cambia localhost por el nombre de tu servidor si es diferente
    $username = "root"; // Cambia tu_usuario por tu nombre de usuario de MySQL
    $password = ""; // Cambia tu_contraseña por tu contraseña de MySQL
    $database = "el_tornillo_feliz"; 

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Verificar si se seleccionó una forma de pago
    if (isset($_POST['forma-pago'])) {
        $forma_pago = $_POST['forma-pago'];

        // Insertar los datos en la base de datos dependiendo de la forma de pago
        if ($forma_pago === 'tarjeta') {
            $num_tarjeta = $_POST['num-tarjeta'];
            $num_dni = $_POST['num-dni'];
            $cantidad_pagar = $_POST['cantidad-pagar'];

            // Preparar la consulta SQL para insertar los datos en la tabla de pagos
            $sql = "INSERT INTO pagos (forma_pago, num_tarjeta, num_dni, cantidad_pagar) VALUES ('$forma_pago', '$num_tarjeta', '$num_dni', '$cantidad_pagar')";

            if ($conn->query($sql) === TRUE) {
                echo "Pago procesado exitosamente.";
            } else {
                echo "Error al procesar el pago: " . $conn->error;
            }
        } elseif ($forma_pago === 'efectivo') {
            // Si la forma de pago es en efectivo, puedes realizar aquí la inserción en la base de datos
            echo "Pago en efectivo procesado exitosamente.";
        } else {
            echo "Por favor selecciona una forma de pago válida.";
        }
    } else {
        echo "Por favor selecciona una forma de pago.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Forma de Pago</title>
    <link rel="stylesheet" href="pago.css">
</head>
<body>

<div class="forma-pago">
    <h1>Seleccionar Forma de Pago</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="radio" id="tarjeta" name="forma-pago" value="tarjeta" onclick="mostrarCampo('tarjeta')">
        <label for="tarjeta">Tarjeta de crédito</label><br>

        <div id="campo-tarjeta" style="display:none;">
            <label for="num-tarjeta">Número de Tarjeta:</label><br>
            <input type="text" id="num-tarjeta" name="num-tarjeta"><br>

            <label for="num-dni">Número de DNI:</label><br>
            <input type="text" id="num-dni" name="num-dni"><br>

            <label for="cantidad-pagar">Cantidad a Pagar:</label><br>
            <input type="text" id="cantidad-pagar" name="cantidad-pagar"><br><br>
        </div>

        <input type="radio" id="efectivo" name="forma-pago" value="efectivo">
        <label for="efectivo">Efectivo</label><br><br>

        <button type="submit">Procesar Pago</button>
        <button type="button" onclick="cancelarPago()">Cancelar</button>
        <section>
        <a href="menu.html">INICIO</a>
      </section>
    </form>
</div>

<div id="resultado"></div>

<script>
    function mostrarCampo(opcion) {
        if (opcion === 'tarjeta') {
            document.getElementById('campo-tarjeta').style.display = 'block';
        }
    }

    function cancelarPago() {
        alert("Pago cancelado.");
    }
</script>

</body>
</html>

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
    if (isset($_POST['paymentMethod'])) {
        $paymentMethod = $_POST['paymentMethod'];

        // Insertar los datos en la base de datos dependiendo del método de pago
        if ($paymentMethod === 'deposito') {
            // Aquí iría el código para el método de depósito, si necesitas guardarlo en la base de datos
        } elseif ($paymentMethod === 'tarjeta') {
            $email = $_POST['email'];

            // Aquí iría el código para el método de pago con tarjeta
            // Por ejemplo, podrías enviar un correo electrónico con los datos de pago
            mail($email, "Detalle del Pago", "Aquí va el detalle del pago con tarjeta");

            echo "Se ha enviado la información de pago a $email";
        }
    } else {
        echo "Por favor selecciona un método de pago.";
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
    <title>Seleccionar Método de Pago</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="payment-form">
    <h1>Seleccionar Método de Pago</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="radio" id="deposito" name="paymentMethod" value="deposito">
        <label for="deposito">Depósito Bancario</label><br>

        <input type="radio" id="tarjeta" name="paymentMethod" value="tarjeta">
        <label for="tarjeta">Pago con Tarjeta</label><br><br>

        <div id="emailForm" style="display: none;">
            <label for="email">Ingrese su correo electrónico:</label><br>
            <input type="email" id="email" name="email"><br><br>
        </div>

        <button type="submit">Enviar</button>
        <button type="button" onclick="cancelPayment()">Cancelar</button>
    </form>
</div>

<script>
    document.getElementById('paymentForm').addEventListener('change', function(event) {
        var selectedMethod = event.target.value;
        var emailFormDiv = document.getElementById('emailForm');

        if (selectedMethod === 'tarjeta') {
            emailFormDiv.style.display = 'block';
        } else {
            emailFormDiv.style.display = 'none';
        }
    });

    function cancelPayment() {
        alert("Pago cancelado.");
    }
</script>

</body>
</html>

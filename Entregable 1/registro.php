<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Create count</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <style>
        /* Estilos adicionales para el icono de ojo */
        .password-toggle-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="form-title">CREATE  COUNT</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="Enter Full Name" required />
                </div>
                <div class="user-input-box">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required />
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required />
                </div>
                <div class="user-input-box">
    <label for="phone_number">Phone Number</label>
    <input type="number" id="phone_number" name="phone_number" min="0" max="999999999" placeholder="Enter Phone Number" maxlength="9" required />
    <small>Enter a numeric phone number with 9 digits</small>
</div>

                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required />
                    <!-- Agregar el icono de ojo -->
                    <i class="fas fa-eye password-toggle-icon" id="password-toggle"></i>
                </div>
                <div class="user-input-box">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required />
                </div>
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male" value="Male" required />
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Female" required />
                    <label for="female">Female</label>
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register">
                <section>
                    <div>
                        <a href="login.php">Log in</a>
                    </div>
                </section>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        // JavaScript para alternar la visibilidad de la contraseña al hacer clic en el ícono de ojo
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.getElementById('password-toggle');

        passwordToggle.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            // Cambiar el icono dependiendo del tipo de contraseña visible u oculta
            if (type === 'password') {
                passwordToggle.classList.remove('fa-eye-slash');
                passwordToggle.classList.add('fa-eye');
            } else {
                passwordToggle.classList.remove('fa-eye');
                passwordToggle.classList.add('fa-eye-slash');
            }
        });
    </script>

<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia localhost por el nombre de tu servidor si es diferente
$username = "root"; // Cambia tu_usuario por tu nombre de usuario de MySQL
$password = ""; // Cambia tu_contraseña por tu contraseña de MySQL
$database = "el_tornillo_feliz"; // Cambia nombre_de_la_base_de_datos por el nombre de la base de datos que creaste

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario de registro si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword']; // Agregar confirmación de contraseña
    $gender = $_POST['gender'];

    // Verificar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
    } else {
        // Hash de la contraseña si las contraseñas coinciden
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Preparar la consulta SQL para insertar datos
        $sql = "INSERT INTO registro (full_name, username, email, phone_number, password, gender) 
                VALUES ('$full_name', '$username', '$email', '$phone_number', '$hashed_password', '$gender')";

        // Ejecutar la consulta y verificar si fue exitosa
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. ¡Bienvenido, $full_name!";
        } else {
            echo "Error al registrar usuario: " . $conn->error;
        }
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

</body>

</html>

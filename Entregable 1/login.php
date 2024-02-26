<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
  <form class="form" action="" method="post">
    <h1 class="form__title">Sign in</h1>
    <div class="form__container">
      <div class="form__group">
        <input type="text" id="username" name="username" class="form__input" placeholder=" ">
        <label for="username" class="form__label">Username:</label>
        <span class="form__line"></span>
      </div>
      <div class="form__group">
        <input type="password" id="password" name="password" class="form__input" placeholder=" ">
        <label for="password" class="form__label">Password:</label>
        <span class="form__line"></span>
      </div>
      <section>
        <a href="contraseña.php">Forgot password?</a>
      </section>
      <input type="submit" class="form__submit" value="Enter">
      <section>
        <a href="registro.php">Create account</a>
      </section>
    </div>
  </form>    
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost"; // Cambia localhost por el nombre de tu servidor si es diferente
    $username = "root";
    $password = "";
    $database = "el_tornillo_feliz";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta SQL para insertar datos
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$hashed_password')";

    // Ejecutar la consulta y verificar si fue exitosa
    if ($conn->query($sql) === TRUE) {
        echo "New user inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>

</body>
</html>



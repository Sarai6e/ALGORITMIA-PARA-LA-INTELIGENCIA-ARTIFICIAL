<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recover Password</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url('imagen1.jpg');
      background-size: cover;
      background-position: center center;
      height: 400px;
      background-position: 0 0, 10px 10px;
      animation: changeBackground 9s linear infinite;
    }

    @keyframes changeBackground {
      0% {
        background-image: url('imagen1.jpg');
      }
      33.33% {
        background-image: url('imagen2.jpg');
      }
      66.66% {
        background-image: url('imagen3.jpg');
      }
      100% {
        background-image: url('imagen1.jpg');
      }
    }

    .container{
      width: 100%;
      max-width: 650px;
      background: rgba(0, 0, 0, 0.5);
      padding: 28px;
      margin: 0 28px;
      border-radius: 10px;
      box-shadow: inset -2px 2px 2px white;
    }

    .form-title{
      font-size: 26px;
      font-weight: 600;
      text-align: center;
      padding-bottom: 6px;
      color: white;
      text-shadow: 2px 2px 2px black;
      border-bottom: solid 1px white;
    }

    .main-user-info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .user-input-box {
      width: 48%;
    }

    .user-input-box label {
      display: block;
      font-size: 16px;
      margin-bottom: 8px;
    }

    .user-input-box input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      outline: none;
    }

    .form-submit-btn input[type="submit"] {
      width: 100%;
      background-color: #f7ae12;
      color: #fff;
      border: none;
      padding: 12px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }

    .form-submit-btn input[type="submit"]:hover {
      background-color: #f7ae12;
    }

    section {
      text-align: center;
      margin-top: 20px;
    }

    section a {
      color: #f7ae12;
      text-decoration: none;
      font-size: 16px;
    }

    section a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="form-title">RECOVER PASSWORD</h1>
    <form id="recovery-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="main-user-info">
        <div class="user-input-box">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter Email">
        </div>
      </div>
      <div class="form-submit-btn">
        <input type="submit" value="Recover Password">
      </div>
    </form>
    <section>
      <div>
        <a href="#">Back to Login</a>
      </div>
    </section>
  </div>

  <?php
  // Verificar si se recibió una solicitud POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Establecer la conexión con la base de datos
      $servername = "localhost"; // Cambia localhost por el nombre de tu servidor si es diferente
      $username = "root";
      $password = "";
      $database = "el_tornillo_feliz";
  

      // Crear una conexión
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Verificar la conexión
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Obtener el correo electrónico ingresado por el usuario
      $email = $_POST['email'];

      // Generar una contraseña aleatoria (puedes cambiar esto si prefieres otra forma de generar contraseñas)
      $password = uniqid();

      // Preparar la consulta SQL para insertar los datos en la tabla
      $sql = "INSERT INTO passwords (email, password) VALUES ('$email', '$password')";

      // Ejecutar la consulta y verificar si fue exitosa
      if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      // Cerrar la conexión
      $conn->close();
  }
  ?>
</body>
</html>


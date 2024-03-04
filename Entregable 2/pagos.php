<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Método de Pago</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #ff7e5f, #feb47b, #ff7e5f, #feb47b);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            overflow: hidden;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            position: relative;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #ff5722; /* Naranja neón */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #ff6d3a; /* Naranja neón más brillante */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ff5722;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #spider-web {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .spider-thread {
            position: absolute;
            background-color: transparent;
            width: 1px;
            height: 100%;
            border-left: 1px solid rgba(0, 0, 0, 0.5);
            animation: moveSpiderThread 8s linear infinite;
        }

        @keyframes moveSpiderThread {
            0% { transform: translateY(0) rotate(0); }
            50% { transform: translateY(-200px) rotate(180deg); }
            100% { transform: translateY(0) rotate(360deg); }
        }

        .back-to-home {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .back-to-home a {
            text-decoration: none;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .back-to-home a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div id="spider-web"></div>
    <div class="container">
        <h2>Seleccione su método de pago:</h2>
        <form id="paymentForm">
            <input type="radio" name="paymentMethod" value="deposito"> Depósito Bancario<br>
            <input type="radio" name="paymentMethod" value="tarjeta"> Pago con Tarjeta<br><br>
            
            <div id="bankAccounts" style="display: none;">
                <h3>Información de cuentas para depósito bancario:</h3>
                <table>
                    <tr>
                        <th>Banco</th>
                        <th>Número de cuenta</th>
                    </tr>
                    <tr>
                        <td>Banco de la Nación</td>
                        <td>78956632145</td>
                    </tr>
                    <tr>
                        <td>BBVA</td>
                        <td>13464678956</td>
                    </tr>
                    <tr>
                        <td>Interbank</td>
                        <td>2356879531</td>
                    </tr>
                    <tr>
                        <td>BCP</td>
                        <td>4789653221</td>
                    </tr>
                </table>
            </div>
            
            <div id="emailForm" style="display: none;">
                <label for="email">Ingrese su correo electrónico:</label><br>
                <input type="email" id="email" name="email"><br><br>
                <button type="submit">Enviar</button>
            </div>
        </form>

        <div class="back-to-home">
            <a href="chatbot.html">Volver a la página principal</a>
        </div>
    </div>

    <script>
        document.getElementById('paymentForm').addEventListener('change', function(event) {
            var selectedMethod = event.target.value;
            var bankAccountsDiv = document.getElementById('bankAccounts');
            var emailFormDiv = document.getElementById('emailForm');

            if (selectedMethod === 'deposito') {
                bankAccountsDiv.style.display = 'block';
                emailFormDiv.style.display = 'none';
            } else if (selectedMethod === 'tarjeta') {
                bankAccountsDiv.style.display = 'none';
                emailFormDiv.style.display = 'block';
            }
        });

        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var email = document.getElementById('email').value;
            // Aquí podrías enviar la información al correo electrónico ingresado
            alert('Se ha enviado la información a ' + email);
        });
    </script>
    <script>
        // Función para crear la tela de araña en el fondo
        function createSpiderWeb() {
            var spiderWeb = document.getElementById('spider-web');
            var numThreads = 40; // Cantidad de hilos de la telaraña

            for (var i = 0; i < numThreads; i++) {
                var spiderThread = document.createElement('div');
                spiderThread.classList.add('spider-thread');
                spiderThread.style.left = Math.random() * window.innerWidth + 'px';
                spiderWeb.appendChild(spiderThread);
            }
        }
        // Llamar a la función para crear la tela de araña cuando la página esté completamente cargada
        window.addEventListener('load', createSpiderWeb);
    </script>
</body>
</html>

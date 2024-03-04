<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de Ferretería</title>
    <style>
        /* Estilos para el fondo animado */
        body {
            background: linear-gradient(45deg, #000000, #FFA500);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            color: white; /* Texto blanco */
            font-family: Arial, sans-serif; /* Fuente del texto */
            margin: 0; /* Elimina el margen predeterminado */
            padding: 0; /* Elimina el relleno predeterminado */
        }

        @keyframes gradientBG {
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

        /* Estilos para el contenedor principal */
        .container {
            max-width: 1200px;
            margin: 0 auto; /* Centra el contenido horizontalmente */
            padding: 20px;
            box-sizing: border-box; /* Incluye el relleno y el borde en el tamaño total */
        }

        /* Estilos para el título */
        h1 {
            text-align: center;
        }

        /* Estilos para el campo de búsqueda */
        #busqueda {
            width: 80%;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 10px; /* Aumenta el margen superior */
        }

        /* Estilos para los cuadros de productos */
        .producto {
            width: 200px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            float: left;
            text-align: center;
            background-color: #fff; /* Fondo blanco para resaltar los productos */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .producto img {
            max-width: 100%;
            height: auto;
        }

        #carrito {
            float: right;
            border: 1px solid #ccc;
            padding: 10px;
            margin-right: 10px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semi-transparente */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        /* Estilos para botones */
        button {
            background-color: #FFA500; /* Botones de color anaranjado */
            color: white; /* Texto blanco en los botones */
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #FF8C00; /* Cambio de color al pasar el ratón */
        }

        /* Estilo para el texto específico */
        .producto h2,
        .producto p {
            color: black; /* Color de texto negro */
        }
    </style>
</head>
<body>
    <h1>Productos de Ferretería</h1>

    
    <input type="text" id="busqueda" placeholder="Buscar productos...">
    <button onclick="buscar()">Buscar</button>
    <div class="producto">
        <img src="1.jpg" alt="Producto 1">
        <h2>Cemento</h2>
        <p>Precio: s/.45.00</p>
        <button onclick="agregarAlCarrito('Cemento', 45.00)">Agregar al carrito</button>
    </div>

    <div class="producto">
        <img src="2.jpg" alt="Producto 2">
        <h2>Tubo Redondo</h2>
        <p>Precio: s/.12.00</p>
        <button onclick="agregarAlCarrito('Tubo Redondo', 12.00)">Agregar al carrito</button>
    </div>

    <div class="producto">
        <img src="3.jpg" alt="Producto 2">
        <h2>Ladrillo de pared</h2>
        <p>Precio: s/.3.00</p>
        <button onclick="agregarAlCarrito('Ladrillo de pared', 3.00)">Agregar al carrito</button>
    </div>

    <div class="producto">
        <img src="4.jpg" alt="Producto 2">
        <h2>Barra de aceros</h2>
        <p>Precio: s/. 42.00</p>
        <button onclick="agregarAlCarrito('Barra de aceros', 42.00)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="5.jpg" alt="Producto 2">
        <h2>Calamina métalica</h2>
        <p>Precio: s/.30.00</p>
        <button onclick="agregarAlCarrito('Calamina métalica', 30.00)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="6.jpg" alt="Producto 2">
        <h2>Martillo</h2>
        <p>Precio: s/28.00</p>
        <button onclick="agregarAlCarrito('Martillo', 28.00)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="7.jpg" alt="Producto 2">
        <h2>Taladro</h2>
        <p>Precio:s/.1056.20</p>
        <button onclick="agregarAlCarrito('Taladro', 1056.20)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="8.jpg" alt="Producto 2">
        <h2>Brocha</h2>
        <p>Precio: s/.22.00</p>
        <button onclick="agregarAlCarrito('Brocha', 22.00)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="9.jpg" alt="Producto 2">
        <h2>Cinta métrica</h2>
        <p>Precio: s/.25.00</p>
        <button onclick="agregarAlCarrito('Cinta métrica', 25.00)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="10.jpg" alt="Producto 2">
        <h2>Llave ajustable</h2>
        <p>Precio: s/.15.00</p>
       <button onclick="agregarAlCarrito('Llave ajustable', 15.00)">Agregar al carrito</button>
    </div>

    <!-- Añade más productos según sea necesario -->
    <div id="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito">
            <!-- Aquí se mostrarán los productos agregados al carrito -->
        </ul>
        <p>Total: <span id="total">0.00</span></p>
        <button onclick="pagar()">Pagar</button>
    </div>

    <div id="resultados">
        <!-- Aquí van los productos, igual que en el ejemplo anterior -->
        </div>

        <!-- Enlace a la página principal -->
        <a href="chatbot.html" class="link-principal">
            <button>Volver a la página principal</button>
        </a>
    </div>
    <script>
        function buscar() {
            var input, filtro, productos, i, txtValoracion;
            input = document.getElementById('busqueda');
            filtro = input.value.toUpperCase();
            productos = document.querySelectorAll('.producto');

            for (i = 0; i < productos.length; i++) {
                txtValoracion = productos[i].textContent || productos[i].innerText;
                if (txtValoracion.toUpperCase().indexOf(filtro) > -1) {
                    productos[i].style.display = "";
                } else {
                    productos[i].style.display = "none";
                }
            }
        }
    </script>
    <script>
        var carrito = [];

        function agregarAlCarrito(nombre, precio) {
            carrito.push({ nombre: nombre, precio: precio });
            mostrarCarrito();
        }

        function mostrarCarrito() {
            var carritoContainer = document.getElementById('lista-carrito');
            var total = 0;

            carritoContainer.innerHTML = '';

            carrito.forEach(function (producto) {
                var item = document.createElement('li');
                item.textContent = producto.nombre + ' - ' + producto.precio;
                carritoContainer.appendChild(item);
                total += parseFloat(producto.precio);
            });

            document.getElementById('total').textContent = total.toFixed(2);
        }

        function pagar() {
            window.location.href = 'pagos.php';
        }
    </script>
</body>
</html>

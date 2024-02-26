document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('login-form');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const username = form.username.value;
        const password = form.password.value;

        // Simulación de validación (puedes agregar tu lógica de validación real aquí)
        if (username === 'usuario' && password === 'contraseña') {
            // Redirigir al usuario a la página principal o realizar alguna acción deseada
            alert('¡Inicio de sesión exitoso!');
        } else {
            errorMessage.textContent = 'Usuario o contraseña incorrectos.';
        }
    });
});





/* Configuración de partículas */
/* Configuración de partículas */
particlesJS('particles-js', {
    "particles": {
        "number": {
            "value": 200
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle"
        },
        "opacity": {
            "value": 0.9
        },
        "size": {
            "value": 3
        },
        "move": {
            "speed": 5
        }
    },
    "interactivity": {
        "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse" /* Efecto cuando el mouse pasa sobre las partículas */
            }
        }
    }
});


/* Validación simple */
function validateLogin() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "" || password === "") {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor, completa todos los campos'
        });
    } else {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: '¡Inicio de sesión exitoso!'
        });
    }
}

function toggleTheme() {
    const loginContainer = document.querySelector('.login-container'); // Seleccionamos solo el contenedor de login
    loginContainer.classList.toggle('light-theme'); // Alternamos la clase 'light-theme'

    const themeIcon = document.querySelector('.toggle-theme');
    if (loginContainer.classList.contains('light-theme')) {
        themeIcon.textContent = '🌙'; // Cambia el icono a luna
    } else {
        themeIcon.textContent = '🌞'; // Cambia el icono a sol
    }
}

function loginWithGoogle() {
    alert("Iniciando sesión con Google...");
    // Aquí podrías redirigir a la página de autenticación de Google
}

function loginWithFacebook() {
    alert("Iniciando sesión con Facebook...");
    // Aquí podrías redirigir a la página de autenticación de Facebook
}

function loginWithGitHub() {
    alert("Iniciando sesión con GitHub...");
    // Aquí podrías redirigir a la página de autenticación de GitHub
}



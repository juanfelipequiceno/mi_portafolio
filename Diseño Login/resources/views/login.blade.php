<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mejorado</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/estilosLogin.css') }}">

</head>

<body>
    <div id="particles-js"></div>

    <div class="login-container">
        <div class="toggle-theme" onclick="toggleTheme()">🌞</div>
        <h1 class="login-title">Iniciar Sesión</h1>

        <input type="text" id="username" class="input-field" placeholder="Usuario">
        <input type="password" id="password" class="input-field" placeholder="Contraseña">



        <button class="btn" onclick="validateLogin()">Login</button>

        <div class="social-login">
            <p>O inicia sesión con:</p>
            <button class="btn-social google" onclick="loginWithGoogle()">Google</button>
            <button class="btn-social facebook" onclick="loginWithFacebook()">Facebook</button>
            <button class="btn-social github" onclick="loginWithGitHub()">GitHub</button>
        </div>
    </div>

    <!-- Agregar el script de Google reCAPTCHA -->



    {{-- <script src="{{ asset('assets/API/api.js}') }}" async defer></script> --}}
    <script src="{{ asset('assets/particles/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2/js/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('assets/js/loginJs.js') }}"></script>
</body>

</html>

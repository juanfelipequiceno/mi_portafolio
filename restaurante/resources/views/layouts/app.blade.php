<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Restaurante Gourmet')</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font/css/fontface.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">



    <!-- AOS CSS -->
    <link href="{{ asset('AOS/css/aos.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/layoutsApp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilosFooter.css') }}">


</head>
<body>
    <!-- Encabezado -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(135deg, #000000, #000000); box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        <div class="container">
            <a class="navbar-brand text-white font-weight-bold" href="{{ route('home') }}" style="font-family: 'Montserrat', sans-serif; font-size: 1.8rem; letter-spacing: 2px;">
                Restaurante Gourmet
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}" style="font-family: 'Roboto', sans-serif; font-size: 1.2rem; transition: all 0.3s ease; text-transform: uppercase;">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('reservations') }}" style="font-family: 'Roboto', sans-serif; font-size: 1.2rem; transition: all 0.3s ease; text-transform: uppercase;">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
        .navbar-nav .nav-link:hover {
            color: #ff7e5f !important;
            transform: translateY(-3px);
            font-weight: bold;
        }

        /* Efecto para el botón de hamburguesa */
        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30"%3E%3Cpath fill="%23ffffff" d="M0 4h30v2H0zm0 7h30v2H0zm0 7h30v2H0z"%3E%3C/path%3E%3C/svg%3E');
        }
    </style>



    <!-- Sección Hero con partículas -->
    <section class="hero">
        <div id="tsparticles"></div> <!-- Div para las partículas -->
        <div class="overlay">
            <div class="hero-content">
                <h1>Bienvenido a <span>Restaurante Gourmet</span></h1>
                <p>Disfruta de una experiencia culinaria inolvidable en un ambiente único</p>
                <a href="{{ route('reservations') }}" class="btn btn-primary">Reservar Ahora</a>
            </div>
        </div>
    </section>

    <!-- Contenido -->
    <main class="container mt-5">
        @yield('content')
    </main>

    <!-- Pie de página -->


    <footer class="footer mt-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Enlaces adicionales -->
                <div class="col-12 text-center">
                    <a href="#" class="footer-link">Sobre Nosotros</a> |
                    <a href="#" class="footer-link">Contacto</a> |
                    <a href="#" class="footer-link">Política de Privacidad</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Sección de contacto y enlaces -->
                <div class="col-md-6 text-center">
                    <p>&copy; 2024 Restaurante Gourmet. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}s"></script>
    <script src="{{ asset('js/menu.js') }}s"></script>

    <!-- AOS JS -->
    <script src="{{ asset('AOS/js/aos.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease',
            once: true,
        });
    </script>

    <!-- Partículas -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.35.0/tsparticles.bundle.min.js"></script>
    <script>
        tsParticles.load("tsparticles", {
            particles: {
                number: {
                    value: 80, // Número de partículas
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                shape: {
                    type: "circle", // Forma de las partículas
                },
                size: {
                    value: 3, // Tamaño de las partículas
                    random: true,
                },
                opacity: {
                    value: 0.5, // Opacidad de las partículas
                    random: true,
                    animation: {
                        enable: true,
                        speed: 1,
                        minimumValue: 0.1
                    }
                },
                links: {
                    enable: false, // Deshabilitamos las conexiones entre partículas
                },
                move: {
                    enable: true,
                    speed: 3,
                    direction: "none", // Dirección aleatoria de movimiento
                    random: true,
                    outModes: {
                        default: "out"
                    }
                }
            }
        });
    </script>
</body>
</html>

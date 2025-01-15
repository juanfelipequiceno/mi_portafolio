<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/tailwind/tailwind.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('asset/bootstrap/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="{{ asset('asset/particles/particles.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/estilosSobreMi.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/estilosparticles.css') }}">
    <title>Document</title>
</head>
<body>

    <div id="particles-js"></div>


    <!-- Navigation Section -->
    <div class="nav-buttons">
        <nav class="floating-nav flex justify-center space-x-6">
            <a href="{{ route('home')}}" class="nav-item active">
                <span class="icon"><i class="fa-solid fa-house"></i></span>
                <span class="label">Inicio</span>
            </a>
            <a href="{{ route('sobremi')}}" class="nav-item">
                <span class="icon"><i class="fas fa-user"></i></span>
                <span class="label">Sobre mí</span>
            </a>
            <a href="{{ route('proyectos') }}" class="nav-item">
                <span class="icon"><i class="fas fa-code"></i></span>
                <span class="label">Proyectos</span>
            </a>
            <a href="{{ route('habilidades') }}" class="nav-item">
                <span class="icon"><i class="fas fa-tools"></i></span>
                <span class="label">Habilidades</span>
            </a>
            <a href="{{ route('contacto') }}" class="nav-item">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <span class="label">Contacto</span>
            </a>
        </nav>
    </div>



    <script src="{{ asset('asset/bootstrap/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('asset/js/partlicles.js') }}"></script>
    <script src="{{ asset('asset/js/aregarYremover.js') }}"></script>


</body>
</html>


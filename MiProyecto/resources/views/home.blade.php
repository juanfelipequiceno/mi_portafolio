<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

</head>
<body>

   <div class="py-10 px-6 text-white">
        <!-- Hero Section -->
        <div class="hero">
            <h1>PORTAFOLIO WEB</h1>
        </div>

        <div class="row">
            <div class="col-5 d-flex">
                <!-- About Section -->
                <div class="left-aligned">
                    <h2>HOLA, SOY FELIPE QUICENO</h2>
                    <p>Soy un Desarrollador Full Stack con una profunda pasión por la creación de experiencias web excepcionales.
                        Me especializo en implementar soluciones tecnológicas innovadoras y eficientes, utilizando tecnologías modernas
                        para garantizar aplicaciones web rápidas, escalables y fáciles de usar. Mi enfoque siempre está en la calidad del
                        código, la optimización del rendimiento y la experiencia del usuario, buscando siempre mejorar la interacción y
                        satisfacción de los usuarios a través de cada proyecto que desarrollo.</p>
                    <div class="social-icons mt-4">
                        <a href="https://www.linkedin.com/in/felipe-quiceno-497013211/" target="_blank" class="px-3 py-2 bg-gray-800 rounded">LinkedIn</a>
                        <a href="https://github.com/juanfelipequiceno/mi_portafolio" target="_blank" class="px-3 py-2 bg-gray-800 rounded">GitHub</a>
                        <a href="https://www.tiktok.com/@felipe.quiceno95" target="_blank" class="px-3 py-2 bg-gray-800 rounded">TikTok</a>
                    </div>
                </div>
            </div>
            <div class="col-7 d-flex justify-center">
                <img src="{{ asset('asset/img/felipe.jpg') }}" alt="Felipe Quiceno" class="img-fluid rounded img">
            </div>
        </div>


        <!-- Navigation Section -->
        @include('Navigation.Navigation')
   </div>

</body>
</html>

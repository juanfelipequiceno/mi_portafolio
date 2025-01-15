<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre mi</title>
</head>
<body>



    <section class="py-10 px-6 text-white" id="sobre-mi">

        <div class="hero">
            <h1>SOBRE MI</h1>
            <h2 class="text-4xl font-extrabold text-white bg-gradient-to-r from-blue-900 to-purple-600 bg-clip-text text-transparent tracking-widest uppercase shadow-md transition-transform duration-300 transform hover:scale-105">
                DESARROLLADOR FULL STACK
            </h2>

        </div>


        <div class="container mx-auto grid md:grid-cols-2 gap-6">
            <!-- ¿Quién soy? -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">¿QUIÉN SOY?</h3>
                <p>Soy un desarrollador Full Stack apasionado por crear soluciones
                    digitales que marquen una diferencia. Con más de 2 años de experiencia en
                    el desarrollo web, combino mi experiencia técnica
                    con un ojo para el diseño para crear experiencias web excepcionales.</p>
            </div>

            <!-- Datos rápidos -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">DATOS RÁPIDOS</h3>
                <ul>
                    <li class="flex items-center mb-2">
                        <i class="fas fa-map-marker-alt text-cyan-400 mr-2"></i>
                        Colombia, Pereira
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-language text-cyan-400 mr-2"></i>
                        Español (nativo), Inglés (Intermedio)
                    </li>
                </ul>
            </div>

            <!-- Mi enfoque -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">MI ENFOQUE</h3>
                <p>Me especializo en construir aplicaciones web robustas y
                    escalables, con un fuerte énfasis en la experiencia del usuario.
                    Creo firmemente en el poder de la tecnología para resolver problemas
                    reales y mejorar la vida de las personas.</p>
            </div>

            <!-- Imagen o logo -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('asset/img/yo.jpg') }}" alt="Logo" class="w-50 h-90 border border-primary rounded transition-transform duration-300 transform hover:scale-105">
            </div>

            <!-- Educación -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">EDUCACIÓN</h3>
                <p>Ingeniería en Software<br>CIAF | 2020-2024</p>
            </div>

            <!-- Certificaciones -->
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">CERTIFICACIONES</h3>
                <ul>
                    <li class="flex items-center">
                        <i class="fas fa-certificate text-cyan-400 mr-2"></i>
                        MAQUETACION DE SITIOS WEB CON HTML5 Y CSS3
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-certificate text-cyan-400 mr-2"></i>
                        ANALISIS Y DESARROLLO DE SOFTWARE
                    </li>
                </ul>
            </div>
        </div>
    </section>


    @include('Navigation.Navigation')

</body>
</html>

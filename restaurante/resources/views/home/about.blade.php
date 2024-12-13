@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/estilosSobreNosotros.css') }}">

</head>
<div class="container sobreNosotros mt-5">
    <!-- Encabezado -->
    <div class="text-center mb-4">
        <h1 class="display-4">Sobre Nosotros</h1>
        <p class="text-muted">Conoce nuestra historia, filosofía y equipo</p>
    </div>

    <!-- Contenido principal -->
    <div class="row align-items-center">
        <!-- Imagen representativa -->
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('img/sobreNosotros.jpg') }}" alt="Sobre Nosotros" class="img-fluid rounded shadow">
        </div>
        <!-- Texto descriptivo -->
        <div class="col-md-6">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2rem; color: #333; margin-bottom: 1rem;">Nuestra Historia</h2>
            <p class="lead" style="font-size: 1.2rem; color: #555; line-height: 1.8;">
                **Restaurante Gourmet** nació con la misión de ofrecer una experiencia culinaria que trascienda lo convencional. Desde nuestros humildes comienzos, hemos trabajado incansablemente para convertirnos en un lugar donde la tradición y la innovación se encuentran en cada plato.
            </p>
            <p style="font-size: 1rem; color: #666; line-height: 1.6;">
                Creemos firmemente en el poder de la gastronomía para contar historias. Cada ingrediente es cuidadosamente seleccionado y preparado para preservar su frescura y sabor natural, asegurando una experiencia memorable en cada visita. Nuestro equipo de chefs combina técnicas modernas con recetas ancestrales, creando un balance perfecto entre lo clásico y lo contemporáneo.
            </p>
            <p style="font-size: 1rem; color: #666; line-height: 1.6;">
                Más allá de la comida, nos esforzamos por crear un ambiente que invite a la conexión y la celebración. Ya sea para una cena romántica, una reunión familiar o una ocasión especial, en Restaurante Gourmet encontrarás el lugar perfecto para disfrutar y compartir momentos únicos.
            </p>
        </div>
    </div>



    <!-- Misión, Visión y Valores -->
    <div class="row mt-5 text-center">
        <div class="col-md-4">
            <h3 class="text-primary">Misión</h3>
            <p>Ofrecer una experiencia gastronómica inolvidable a través de platos únicos y un servicio excepcional.</p>
        </div>
        <div class="col-md-4">
            <h3 class="text-success">Visión</h3>
            <p>Ser reconocidos como un referente culinario que combina tradición y vanguardia.</p>
        </div>
        <div class="col-md-4">
            <h3 class="text-warning">Valores</h3>
            <p>Calidad, creatividad, sostenibilidad y pasión por la excelencia.</p>
        </div>
    </div>

    <!-- Nuestro Equipo -->
    <div class="row mt-5">
        <h2 class="text-center mb-4">Conoce a Nuestro Equipo</h2>

        <div class="col-md-4 text-center" data-aos="fade-up">
            <img src="{{ asset('img/chef1.jpg') }}" alt="Chef Juan" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h5 class="mb-0">Chef Juan Martínez</h5>
            <p class="text-muted">Chef Ejecutivo</p>
            <p class="small">Con más de 15 años de experiencia, es el encargado de crear los sabores únicos de nuestro restaurante.</p>
        </div>

        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('img/gerenteGeneral.jpg') }}" alt="Ana López" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h5 class="mb-0">Ana López</h5>
            <p class="text-muted">Gerente General</p>
            <p class="small">Experta en hospitalidad, asegura que cada cliente disfrute de una experiencia perfecta.</p>
        </div>

        <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('img/jefeMesero.jpg') }}" alt="Carlos García" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h5 class="mb-0">Carlos García</h5>
            <p class="text-muted">Sous Chef (Subchef)</p>
            <p class="small">Lidera nuestro equipo de atención al cliente para garantizar un servicio impecable.</p>
        </div>
    </div>
</div>
@endsection

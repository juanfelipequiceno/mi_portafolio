<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/css/estilosProyectos.css') }}">
    <title>Proyectos</title>
</head>
<body>
    <section class="py-10 px-6 text-white" id="proyectos">
        <div class="container my-5">
            <h1 class="text-center text-white fw-bold">Proyectos</h1>
            <p class="text-center text-secondary">Una selección de mis trabajos</p>

            <!-- Filtros -->
            <div class="d-flex justify-content-center my-4">
                <select class="form-select me-3" id="filterCategory" aria-label="Filtrar por categoría">
                    <option selected value="all">Todas las categorías</option>
                    <option value="web">Desarrollo Web</option>
                    <option value="database">Bases de Datos</option>
                    <option value="api">APIs</option>
                </select>
                <select class="form-select" id="filterLanguage" aria-label="Filtrar por lenguaje">
                    <option selected value="all">Todos los lenguajes</option>
                    <option value="php">PHP</option>
                    <option value="javascript">JavaScript</option>
                    <option value="python">Python</option>
                </select>
            </div>

            <div class="row" id="projectList">
                <!-- Proyecto 1 -->
                <div class="col-md-4 mb-4 project" data-category="web" data-language="php">
                    <div class="card bg-dark text-white h-100 project-card">
                        <img src="{{ asset('asset/img/maxresdefault.jpg') }}" class="card-img-top" alt="Proyecto 1">
                        <div class="card-body">
                            <h5 class="card-title text-primary">E-commerce con Laravel</h5>
                            <p class="card-text">
                                Plataforma de comercio electrónico con autenticación, carrito de compras y panel de administración.
                                Desarrollado con Laravel y MySQL.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="col-md-4 mb-4 project" data-category="database" data-language="javascript">
                    <div class="card bg-dark text-white h-100 project-card">
                        <img src="{{ asset('asset/img/hq720.jpg') }}" class="card-img-top" alt="Proyecto 2">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Gestor de Base de Datos</h5>
                            <p class="card-text">
                                Aplicación web para gestionar bases de datos en tiempo real utilizando Node.js y MongoDB.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="col-md-4 mb-4 project" data-category="api" data-language="javascript">
                    <div class="card bg-dark text-white h-100 project-card">
                        <img src="{{ asset('asset/img/postman-registrousuario.webp') }}" class="card-img-top" alt="Proyecto 3">
                        <div class="card-body">
                            <h5 class="card-title text-primary">API RESTful para Gestión de Tareas</h5>
                            <p class="card-text">
                                API construida con Node.js, Express y JWT para autenticar usuarios y administrar tareas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 4 -->
                <div class="col-md-4 mb-4 project" data-category="web" data-language="javascript">
                    <div class="card bg-dark text-white h-100 project-card">
                        <img src="ruta-a-tu-imagen.jpg" class="card-img-top" alt="Proyecto 4">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Chat en Tiempo Real</h5>
                            <p class="card-text">
                                Aplicación de chat en tiempo real utilizando WebSockets y React.js. Backend con Node.js.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 5 -->
                <div class="col-md-4 mb-4 project" data-category="database" data-language="php">
                    <div class="card bg-dark text-white h-100 project-card">
                        <img src="ruta-a-tu-imagen.jpg" class="card-img-top" alt="Proyecto 5">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Sistema de Gestión Escolar</h5>
                            <p class="card-text">
                                Sistema para administrar estudiantes, calificaciones y horarios.
                                Desarrollado con PHP, Laravel y PostgreSQL.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('Navigation.Navigation')
    </section>

    <script src="{{ asset('asset/js/proyectos.js') }}"></script>
</body>
</html>

@extends('layouts.app')

    <style>

        .tituloReservation{
            font-family: 'Playfair Display', serif; /* Fuente para títulos */
            font-size: 1.5rem;
            color: #333;
        }
        .form-control {
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            transition: all 0.3s ease;
            box-shadow: none;
        }
        .form-control:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }
        .reservation{
            background: linear-gradient(135deg, #6c63ff, #3f3dff);
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1.2rem;
            transition: background 0.3s ease;
        }
        .reservation:hover {
            background: linear-gradient(135deg, #3f3dff, #6c63ff);
        }

        #titulo-reservaciones {
            animation: fadeInUp 1.5s ease-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }


        #titulo-reservaciones {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: #000000;
            text-transform: uppercase;
            letter-spacing: 5px;
            text-align: center;
            margin-bottom: 1.5rem;
            position: relative;
            text-shadow: 2px 5px 5px 5px rgba(0, 0, 0, 0.3);
        }

        #titulo-reservaciones span {
            display: block;
            height: 4px;
            width: 50px;
            background: #e74c3c;
            margin: 10px auto 0;
            border-radius: 2px;
        }

    </style>

@section('content')
<div class="container mt-5">
    <!-- Título -->
    <h1 id="titulo-reservaciones" class="text-center mb-4">
        Reservacion
    </h1>

    <!-- Mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success text-center" style="font-size: 1.2rem;">
            {{ session('success') }}
        </div>
    @endif




    <!-- Formulario -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm p-4">
                <form action="{{ route('reservations.store') }}" method="POST">
                    @csrf

                    <!-- Nombre Completo -->
                    <div class="mb-4">
                        <label for="name" class="form-label" style="font-weight: 500; color: #555;">Nombre Completo</label>
                        <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="Escribe tu nombre completo" required>
                    </div>


                    <!-- Correo Electrónico -->
                    <div class="mb-4">
                        <label for="email" class="form-label" style="font-weight: 500; color: #555;">Correo Electrónico</label>
                        <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="example@email.com" required>
                    </div>

                    <!-- Fecha -->
                    <div class="mb-4">
                        <label for="date" class="form-label" style="font-weight: 500; color: #555;">Fecha</label>
                        <input type="date" class="form-control rounded-pill" id="date" name="date" required>
                    </div>

                    <!-- Hora -->
                    <div class="mb-4">
                        <label for="time" class="form-label" style="font-weight: 500; color: #555;">Hora</label>
                        <input type="time" class="form-control rounded-pill" id="time" name="time" required>
                    </div>

                    <!-- Número de Invitados -->
                    <div class="mb-4">
                        <label for="guests" class="form-label" style="font-weight: 500; color: #555;">Número de Invitados</label>
                        <input type="number" class="form-control rounded-pill" id="guests" name="guests" min="1" placeholder="Ej: 2" required>
                    </div>

                    <!-- Botón Enviar -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary reservation" style="font-family: 'Playfair Display', serif; font-size: 1.2rem; letter-spacing: 1px;">
                            <i class="fas fa-paper-plane"></i> Enviar Reservación
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.getElementById('email').addEventListener('input', function() {
        const email = this.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
        }
    });
</script>

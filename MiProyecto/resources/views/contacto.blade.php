<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONTACTO</title>
    <link rel="stylesheet" href="{{ asset('asset/css/estiloscontacto.css') }}">
</head>
<body>
    <section class="contact-section py-10 px-6 text-white" id="contacto">
        <h1 class="contact-title">CONTACTO</h1>
        <p class="contact-subtitle">¿Tienes un proyecto en mente? ¡Hablemos!</p>

        <div class="contact-container">
            <!-- Sección Izquierda -->
            <div class="contact-left">
                <h2>Conectemos</h2>
                <p>Estoy disponible para proyectos freelance y nuevas oportunidades laborales. Me encantaría escuchar sobre tu proyecto.</p>
                <div class="contact-info">
                    <p><i class="fas fa-envelope"></i> tuemail@ejemplo.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> La Paz, Bolivia</p>
                </div>
                <div class="contact-links">
                    <a href="#" class="contact-btn linkedin">LinkedIn</a>
                    <a href="#" class="contact-btn github">GitHub</a>
                    <a href="#" class="contact-btn gmail">Gmail</a>
                </div>
            </div>

            <!-- Sección Derecha -->
            <div class="contact-right">
                <h2>Envíame un mensaje</h2>
                <form action="{{ route('enviar.contacto') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label for="name">¿Cómo te llamas?</label>
                        <input type="text" id="name" name="name" placeholder="Escribe tu nombre completo" required>
                    </div>
                    <div class="form-group">
                        <label for="email">¿Cuál es tu email?</label>
                        <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Tu mensaje</label>
                        <textarea id="message" name="message" rows="4" placeholder="Describe tu proyecto, idea o propuesta. ¿En qué puedo ayudarte?" required></textarea>
                    </div>
                    <button type="submit" class="send-btn">Enviar Mensaje</button>
                </form>

            </div>
        </div>
    </section>

    @include('Navigation.Navigation')
</body>
</html>

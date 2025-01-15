<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/css/estiloshabilidades.css') }}">
    <title>HABILIDADES</title>
</head>
<body>

    <section class="py-10 px-6 text-white" id="habilidades">

        <section class="skills-section">
            <h1 class="skills-title">HABILIDADES</h1>
            <p class="skills-subtitle">Tecnologías y herramientas que domino</p>

            <div class="skills-category">
                <h2>Frontend Development</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/png-clipart-html-logo-html5-logo-icons-logos-emojis-tech-companies-thumbnail.png') }}" alt="HTML5">
                        <p>HTML5</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/css3-logo-png-transparent.png') }}" alt="CSS3">
                        <p>CSS3</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/JavaScript-logo.png') }}" alt="JavaScript">
                        <p>JavaScript</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/React-icon.svg.png') }}" alt="React">
                        <p>React</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/Bootstrap_logo.svg.png') }}" alt="Bootstrap">
                        <p>Bootstrap</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/Vue.png') }}" alt="Vue.js">
                        <p>Vue.js</p>
                    </div>
                </div>
            </div>

            <div class="skills-category">
                <h2>Backend Development</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/PHP-logo.svg.png') }}" alt="PHP">
                        <p>PHP</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/nodejs-1-logo-png-transparent.png') }}" alt="Node.js">
                        <p>Node.js</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/laravel-icon-497x512-uwybstke.png') }}" alt="Laravel">
                        <p>Laravel</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/226777.png') }}" alt="JAVA">
                        <p>JAVA</p>
                    </div>
                </div>
            </div>

            <div class="skills-category">
                <h2>Bases de Datos y Herramientas</h2>
                <div class="skills-grid">
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/MySQL-logo.png') }}" alt="MySQL">
                        <p>MySQL</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/PostgreSQL-Logo.wine.png') }}" alt="PostgreSQL">
                        <p>PostgreSQL</p>
                    </div>
                    <div class="skill-item">
                        <img src="{{ asset('asset/img/Git-Icon-1788C.png') }}" alt="Git">
                        <p>Git</p>
                    </div>
                </div>
            </div>
        </section>


        @include('Navigation.Navigation')
    </section>

</body>
</html>

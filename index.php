<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Laura Basurto, desarrolladora web Full Stack.">

    <title>Laura Basurto - Desarrolladora Web</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main>

    <section class="presentacion">

        <div class="bloque-presentacion">

            <h1>Desarrolladora Web</h1>

            <p class="descripcion">
               Hola, soy Laura. Soy desarrolladora web <strong>Full Stack</strong> y disfruto creando aplicaciones web funcionales, intuitivas y con un diseño cuidado. Me gusta participar en todo el proceso de desarrollo, desde la interfaz que ve el usuario hasta la lógica que hace funcionar cada aplicación, siempre buscando un código limpio y soluciones bien estructuradas. Actualmente continúo ampliando mis conocimientos y desarrollando nuevos proyectos para seguir creciendo profesionalmente y afrontar nuevos retos.
            </p>

        </div>

        <aside class="bloque-tecnologias">

            <div class="cabecera-stack">
                <span class="etiqueta-bloque">Stack tecnológico</span>
            </div>

            <div class="grupos-stack">
                <div class="grupo-tecnologias">
                    <h3>Frontend</h3>
                    <p>HTML · CSS · JavaScript</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>Backend</h3>
                    <p>PHP · Java · Python</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>Base de datos</h3>
                    <p>MySQL · phpMyAdmin</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>Control de versiones</h3>
                    <p>Git · GitHub</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>CMS</h3>
                    <p>WordPress</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>Automatización</h3>
                    <p>n8n · Make · Apify</p>
                </div>
            </div>

        </aside>

     </section>

    <section class="proyectos">

        <div class="cabecera-seccion">

            <h2>Proyectos por área</h2>

            <p>
                Selecciona un área para ver proyectos resumidos. Cada tarjeta
                enlaza a una página con capturas, tecnologías y más detalle.
            </p>

        </div>

       <div class="contenedor-proyectos">

            <aside class="menu-categorias">

            <button class="tarjeta-categoria activa" data-categoria="desarrollo">
                <span class="icono-categoria">💻</span>
                <strong>Desarrollo Web</strong>
                <small>Aplicaciones y proyectos con código.</small>
            </button>

            <button class="tarjeta-categoria" data-categoria="automatizaciones">
                <span class="icono-categoria">⚙️</span>
                <strong>Automatizaciones</strong>
                <small>Workflows y optimización de tareas.</small>
            </button>

            <button class="tarjeta-categoria" data-categoria="wordpress">
                <span class="icono-categoria">🌐</span>
                <strong>WordPress</strong>
                <small>Diseño, maquetación y webs profesionales.</small>
            </button>

            </aside>

        <div class="lista-proyectos">
            <!-- JavaScript generará aquí las tarjetas resumen -->
        </div>

        </div>

    </section>
   

</main>

<?php require_once 'includes/footer.php'; ?>

<?php require_once 'data/proyectos.php'; ?>

<script>
    const proyectos = <?= json_encode($proyectos, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;
</script>

<script src="assets/js/script.js"></script>

</body>
</html>
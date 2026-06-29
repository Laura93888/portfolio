<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Laura Basurto, desarrolladora web Full Stack.">

    <title>Laura Basurto | Portfolio</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main>

    <section class="presentacion">

        <span class="saludo">Hola, soy Laura 👋</span>

        <h1>Desarrolladora Web</h1>

        <p class="descripcion">
            Tras finalizar el Grado Superior en Desarrollo de Aplicaciones Web,
            busco mi primera oportunidad como desarrolladora. Me gusta crear
            aplicaciones completas, funcionales e intuitivas, cuidando tanto
            el frontend como el backend.
        </p>

        <div class="tecnologias">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>Python</span>
            <span>Git</span>
            <span>WordPress</span>
        </div>

    </section>

    <section class="proyectos">

        <div class="cabecera-seccion">
            <h2>Mis proyectos</h2>
            <p>
                Explora mis trabajos por área. En la portada verás un resumen,
                y cada proyecto tendrá su propia página con más detalle.
            </p>
        </div>

        <div class="tarjetas-categorias">

            <button class="tarjeta-categoria activa" data-categoria="desarrollo">
                <span class="icono-categoria">💻</span>
                <strong>Desarrollo Web</strong>
                <small>Aplicaciones con HTML, CSS, JavaScript, PHP y MySQL.</small>
            </button>

            <button class="tarjeta-categoria" data-categoria="automatizaciones">
                <span class="icono-categoria">⚙️</span>
                <strong>Automatizaciones</strong>
                <small>Flujos digitales para optimizar procesos y tareas.</small>
            </button>

            <button class="tarjeta-categoria" data-categoria="wordpress">
                <span class="icono-categoria">🌐</span>
                <strong>WordPress</strong>
                <small>Diseño y maquetación de sitios web profesionales.</small>
            </button>

        </div>

        <div class="lista-proyectos">
            <!-- JavaScript generará aquí las tarjetas resumen -->
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
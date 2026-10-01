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
    <?php 
    // Cargamos los proyectos al principio para tenerlos disponibles en PHP
    require_once 'data/proyectos.php'; 

    // Diccionario opcional por si quieres nombres más bonitos o capitalizados
    $nombresBonitos = [
        'desarrollo' => 'Desarrollo Web',
        'automatizaciones' => 'Automatización',
        'wordpress' => 'WordPress'
    ];
    ?>

<main>

    <section class="proyectos">

        <div class="cabecera-seccion">

            <h2>Proyectos</h2>

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
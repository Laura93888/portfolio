<?php
require_once 'data/proyectos.php';

$nombres = [
    "desarrollo" => "Desarrollo Web",
    "automatizaciones" => "Automatización",
    "wordpress" => "WordPress"
];

$destacados = [];
foreach ($proyectos as $clave => $grupo) {
    foreach ($grupo as $p) {
        if (!empty($p['destacado'])) {
            $p['categorias'] = array_filter([$nombres[$clave], $p['categoriaextra'] ?? null]);
            $destacados[] = $p;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Laura Basurto | Desarrolladora Web | Aplicaciones Web y Automatización.">

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
               Hola, soy Laura. Desarrollo aplicaciones web completas, desde la interfaz y la lógica de negocio hasta el servidor y la base de datos. Trabajo con APIs e integraciones y también desarrollo automatizaciones con herramientas como n8n.
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
                    <p>PHP</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>Base de datos</h3>
                    <p>MySQL · phpMyAdmin</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>APIs e integraciones</h3>
                    <p>REST APIs · JSON · cURL</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>Automatización</h3>
                    <p>n8n · Make · Apify</p>
                </div>

                <div class="grupo-tecnologias">
                    <h3>CMS</h3>
                    <p>WordPress</p>
                </div>
                
            </div>

        </aside>

     </section>

    <section class="proyectos" id="destacados">
        <div class="cabecera-seccion">
            <h2>Proyectos destacados</h2>
        </div>

        <div class="lista-proyectos">
            <?php foreach ($destacados as $p): ?>
                <article class="tarjeta-proyecto">
                    <div>
                        <div class="categorias-proyecto">
                            <?php foreach ($p['categorias'] as $c): ?>
                                <span data-categoria="<?= htmlspecialchars($c) ?>"><?= htmlspecialchars($c) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <h3><?= htmlspecialchars($p['titulo']) ?></h3>
                        <p><?= htmlspecialchars($p['descripcion']) ?></p>
                    </div>
                    <div class="tecnologias-proyecto">
                        <?php foreach ($p['tecnologias'] as $t): ?>
                            <span><?= htmlspecialchars($t) ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?= $p['enlace'] ?>" class="enlace-proyecto">Ver proyecto →</a>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="enlaces-proyecto">
            <a href="mis-proyectos.php" class="boton-proyecto">Ver todos los proyectos →</a>
        </div>
    </section>

    <section class="proyectos" id="sobre-mi">
        <div class="cabecera-seccion"><h2>Sobre mí</h2></div>
        <p class="descripcion">
            Me formé en Magisterio de Primaria y trabajé durante varios años en el ámbito educativo. Mi interés por la tecnología me llevó a cursar un Máster en TIC aplicadas a la Educación y, posteriormente, el Grado Superior en Desarrollo de Aplicaciones Web. 
        </p>
        <p class="descripcion">
            Actualmente estoy orientada al desarrollo web y la automatización de procesos. De mi experiencia en educación conservo una forma de trabajar que también aplico al desarrollo: analizar antes de resolver, organizarme, explicar ideas con claridad y comunicarme con perfiles técnicos y no técnicos. Me interesa entender cómo funciona cada parte de una aplicación, desde la interfaz y la lógica de negocio hasta la base de datos y las integraciones.
        </p>
        
        <div class="enlaces-proyecto">
            <a href="mailto:lauritabasurtoteno@gmail.com" class="boton-proyecto">Contactar</a>
            <a href="tel:+34657664762" class="enlace-proyecto">657 66 47 62</a>
        </div>
    </section>
   

</main>

<?php require_once 'includes/footer.php'; ?>

</body>
</html>
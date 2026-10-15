<?php

require_once 'data/proyectos.php';

$proyecto = null;

foreach ($proyectos["automatizaciones"] as $item) {
    if ($item["titulo"] === "Scraping avanzado con bots personalizados") {
        $proyecto = $item;
        break;
    }
}

if($proyecto==null){
    header("Location: index.php");
    exit;
}

$titulo = $proyecto["titulo"];
$descripcion = $proyecto["descripcion"];
$categoria = "Automatización e IA";
$descripcionlarga = $proyecto["descripcionlarga"];


?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="<?= htmlspecialchars($proyecto['descripcion'], ENT_QUOTES, 'UTF-8'); ?>"
    >

    <title><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?> - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">


    <section class="proyecto-hero">
        <h1>
            <?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?>
        </h1>

        <p class="proyecto-introduccion">
            <?= htmlspecialchars($descripcionlarga, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <div class="proyecto-imagen-principal">

            <a href="assets/img/scrappingbots/resultado.png"
               target="_blank">

                <img
                    src="assets/img/scrappingbots/resultado.png"
                    alt="Captura de los datos extraidos del scraping en el sheet"
                    loading="lazy">

            </a>
        </div>



    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                El reto
            </h2>

        <p>
            <strong>Recopilar información de posibles leads</strong> de forma manual en portales web exige mucho tiempo: hay que entrar página por página, buscar los datos relevantes y organizarlos, lo que dificulta procesar grandes volúmenes de forma eficiente.
        </p>

        <p>
            Además, automatizar esta tarea no siempre es sencillo: cada portal tiene una estructura y unas condiciones de acceso diferentes. Se puede requerir iniciar sesión, aceptar cookies, o interactuar con distintos elementos de la página para llegar a la información necesaria.
        </p>
            </div>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                La solución
            </h2>

            <p>
                Desarrollar un sistema de scraping personalizado e integrado con <strong>n8n</strong>, capaz de adaptar la extracción de información a las características de cada portal web.
            </p>

            <p>
                Tras analizar cada web, <strong>se configuran bots personalizados para cada portal, así se pueden localizar los datos relevantes</strong> y organizar la información para su uso en acciones comerciales. Aunque se aplica actualmente al sector inmobiliario, el sistema puede adaptarse a otras webs y necesidades.
            </p>

            </div>

            <div class="proyecto-imagen-principal">

                <a href="assets/img/scrappingbots/kelify2.png"
                   target="_blank">

                    <img
                        src="assets/img/scrappingbots/kelify2.png"
                        alt="Flujo de captación y extracción de datos de empresas"
                        loading="lazy">

                </a>
            </div>
    
        
    </section>

    


        <!-- =====================================================
             PROCESO DE AUTOMATIZACIÓN
             ===================================================== -->
        <section class="seccion-proyecto">

            <div class="cabecera-seccion">
                <h2>Proceso de automatización</h2>
                <p>
                    El flujo comienza con la búsqueda de anuncios en distintos portales inmobiliarios, continúa con la extracción de información y termina con el almacenamiento de los datos obtenidos en Google Sheets.
                </p>
            </div>

            <div class="bloques-tecnicos pasos-proceso">

                <!-- FASE 1 -->
                <article class="bloque-tecnico">
                    <h3>01 · Búsqueda paramétrica y control de duplicados</h3>
                    <p>
                        Mediante parámetros de búsqueda se seleccionan las ubicaciones en las que buscar pisos. A partir de esa selección, Web Scraper <strong>localiza los anuncios y recopila sus URL</strong> para identificar las viviendas que se van a analizar. Antes de procesar los resultados, contrasta las URL con los registros de Google Sheets para detectar anuncios ya registrados y <strong>evitar duplicados</strong>.
                    </p>
              
                    <div class="proyecto-imagen-principal">
                        <a href="assets/img/scrappingbots/web_scrapper.png" target="_blank">
                            <img src="assets/img/scrappingbots/web_scrapper.png" alt="Generación de URLs" loading="lazy">
                        </a>
                    </div>
                </article>

                <!-- FASE 2 -->
                <article class="bloque-tecnico">
                    <h3>02 · Navegación automatizada y extracción de datos</h3>
                    <p>
                        Una vez recopiladas las URL, el sistema las envía a un <strong>actor personalizado</strong> desarrollado con JavaScript y Playwright en Apify, que procesa los anuncios uno a uno. El actor automatiza la navegación por el portal, inicia sesión cuando es necesario, gestiona las cookies y accede a cada ficha como lo haría un usuario desde el navegador. De esta forma, puede recorrer los anuncios y extraer la información necesaria mediante selectores CSS.
                    </p>
                    <div class="proyecto-imagen-principal">
                        <a href="assets/img/scrappingbots/actor_personalizado.png" target="_blank">
                            <img src="assets/img/scrappingbots/actor_personalizado.png" alt="Ejecución de scraping en portales inmobiliarios" loading="lazy">
                        </a>
                    </div>
                </article>

                <!-- FASE 3 -->
                <article class="bloque-tecnico">
                    <h3>03 · Procesamiento y almacenamiento de datos</h3>
                    <p>
                        Tras la extracción de los campos de interés de cada anuncio, los datos se organizan y almacenan en Google Sheets, donde quedan centralizados y preparados para su consulta y para integrarlos en otras automatizaciones comerciales, como el envío de mensajes por WhatsApp.
                    </p>
                    <div class="proyecto-imagen-principal">
                        <a href="assets/img/scrappingbots/limpieza_datos.png" target="_blank">
                            <img src="assets/img/scrappingbots/limpieza_datos.png" alt="Volcado de datos inmobiliarios a Google Sheets" loading="lazy">
                        </a>
                    </div>
                </article>

            </div>

        </section>

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Resultado
            </h2>

        </div>

        <p>
            Se ha construido un sistema automatizado y escalable capaz de extraer diariamente los nuevos anuncios de pisos en diferentes portales inmobiliarios, superando barreras como inicios de sesión o restricciones de cookies.
        </p>

        <p>
            Gracias al control mediante fechas y URLs, se evita duplicar información y se obtienen bases de datos de leads limpios y actualizados en Google Sheets, listos para conectar con estrategias comerciales directas.
        </p>

    </section>



    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Tecnologías y herramientas utilizadas
            </h2>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    n8n
                </h3>

                <p>
                    Entorno principal desde el que se organiza y ejecuta la automatización.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Apify
                </h3>

                <p>
                    Plataforma en la nube integrada con n8n que permite ejecutar las herramientas de scraping y los actores personalizados encargados de localizar anuncios y extraer información de los portales inmobiliarios.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Playwright
                </h3>

                <p>
                    Actor de Apify basado en Playwright, personalizado mediante código para desarrollar bots que navegan automáticamente por los portales web.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    JavaScript
                </h3>

                <p>
                    Lenguaje utilizado tanto para desarrollar la lógica de los actores personalizados de scraping como para crear pequeños fragmentos de código en n8n que permiten procesar los datos entre las distintas etapas de la automatización.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Web Scrapper
                </h3>

                <p>
                    Técnicas de extracción y procesamiento de información
                    procedente de diferentes estructuras web.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Sheets
                </h3>

                <p>
                    Almacenamiento y control de los registros obtenidos.
                </p>

            </article>

        </div>

    </section>


    <section class="enlaces-proyecto">

        <a
            href="<?= htmlspecialchars($proyecto["enlace"], ENT_QUOTES, 'UTF-8'); ?>"
            class="boton-proyecto"
        >
            Ver proyecto
        </a>

        <a
            href="mis-proyectos.php?categoria=automatizaciones"
            class="enlace-proyecto"
        >
            ← Todos los proyectos
        </a>

    </section>


</main>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>


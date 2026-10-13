<?php

require_once 'data/proyectos.php';

$proyecto = null;

foreach ($proyectos["automatizaciones"] as $item) {
    if ($item["titulo"] === "Scraping avanzado con bots personalizados") {
        $proyecto = $item;
        break;
    }
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
        content="<?= htmlspecialchars($proyecto['descripcion']); ?>"
    >

    <title><?= $titulo; ?> - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">


    <section class="proyecto-hero">
        <h1>
            <?= $titulo ?> 
        </h1>

        <p class="proyecto-introduccion">
            <?= $descripcionlarga ?> 
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="proyecto-imagen-principal">

            <a
                href="assets/img/scrappingbots/kelify2.png"
                target="_blank"
            >
                <img
                    src="assets/img/scrappingbots/kelify2.png"
                    alt="Flujo principal de scraping en n8n"
                >
            </a>

        </div>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                El reto
            </h2>

        </div>

        <p>
            Recopilar información de posibles leads de forma manual en portales web exige mucho tiempo: hay que entrar página por página, buscar los datos relevantes y organizarlos, lo que dificulta procesar grandes volúmenes de forma eficiente.
        </p>

        <p>
            Al intentar automatizar este proceso, las herramientas de scraping tradicionales se quedan cortas. Muchos de estos portales imponen barreras de acceso: exigen iniciar sesión con cuenta, aceptar cookies, seleccionar ubicaciones manualmente o navegar haciendo clics hasta llegar al dato clave.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                La solución
            </h2>

            <p>
                Desarrollar un sistema de scraping personalizado e integrado con n8n, capaz de adaptar la extracción de información a las características de cada portal web.
            </p>

            <p>
                Tras un análisis previo de la estructura del sitio web, estos bots se configuran para iniciar sesión, aceptar avisos de cookies y navegar por la web haciendo los clics necesarios. De esta manera localizan de forma precisa los datos clave (como nombres y teléfonos) que serán utilizados en acciones comerciales, como el envío automatizado de mensajes por WhatsApp.
            </p>
            
        </div>
    </section>


        <!-- =====================================================
             PROCESO DE AUTOMATIZACIÓN
             ===================================================== -->
        <section class="seccion-proyecto">

            <div class="cabecera-seccion">
                <h2>Proceso de automatización</h2>
                <p>
                    El objetivo es extraer de forma masiva los datos de contacto y características de inmuebles automatizando el rastreo en diferentes portales de vivienda de Madrid. Dependiendo de las restricciones de cada plataforma (como Milanuncios, Fotocasa o Kelify), el flujo adapta su estrategia de extracción.
                </p>
            </div>

            <div class="bloques-tecnicos pasos-proceso">

                <!-- FASE 1 -->
                <article class="bloque-tecnico">
                    <h3>01 · Búsqueda paramétrica y control de duplicados</h3>
                    <p>
                        A través de triggers en <strong>n8n</strong> y formularios de selección de zona (como Arganzuela, Vicálvaro o Moratalaz), el sistema genera las URLs de búsqueda de pisos. Antes de ejecutar la extracción, contrasta los listados con <strong>Google Sheets</strong> para procesar únicamente los anuncios nuevos y evitar duplicidades.
                    </p>
                    <div class="proyecto-imagen-principal">
                        <a href="assets/img/scrappingbots/kelify.png" target="_blank">
                            <img src="assets/img/scrappingbots/kelify.png" alt="Generación de búsquedas y filtrado de URLs de pisos" loading="lazy">
                        </a>
                    </div>
                </article>

                <!-- FASE 2 -->
                <article class="bloque-tecnico">
                    <h3>02 · Dos vías de ejecución: Scraping directo o Actores con Playwright</h3>
                    <p>
                        Dependiendo del portal inmobiliario, el flujo actúa de dos formas: 
                        <br>• <strong>Sin autenticación:</strong> Recorre listados públicos de viviendas (Milanuncios o Fotocasa) extrayendo títulos, nombres de particulares y URLs directamente.
                        <br>• <strong>Con autenticación (Actor Playwright personalizado con JS):</strong> Inicia sesión con credenciales, acepta cookies y navega por zonas restringidas de los anuncios de pisos de forma interactiva (Kelify).
                    </p>
                    <div class="proyecto-imagen-principal">
                        <a href="assets/img/scrappingbots/actor_personalizado.png" target="_blank">
                            <img src="assets/img/scrappingbots/actor_personalizado.png" alt="Ejecución de scraping en portales inmobiliarios" loading="lazy">
                        </a>
                    </div>
                </article>

                <!-- FASE 3 -->
                <article class="bloque-tecnico">
                    <h3>03 · Extracción y volcado centralizado</h3>
                    <p>
                        Mediante selectores CSS adaptados a cada web de vivienda, los bots extraen los datos deseados de los inmuebles (precios, metros cuadrados, teléfonos y nombres de particulares). Toda la información estructurada se centraliza de forma limpia en Google Sheets, lista para disparar flujos comerciales como WhatsApp.
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
            Hemos construido un sistema automatizado y escalable capaz de extraer diariamente los nuevos anuncios de pisos en diferentes portales inmobiliarios, superando barreras como inicios de sesión o restricciones de cookies.
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
                    Orquestación de workflows, procesamiento de datos,
                    filtros y conexión entre servicios.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Apify
                </h3>

                <p>
                    Ejecución de los actores encargados de recorrer las webs
                    y obtener la información.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Playwright
                </h3>

                <p>
                    Automatización del navegador utilizada en el actor
                    personalizado.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    JavaScript
                </h3>

                <p>
                    Desarrollo de lógica personalizada para procesar,
                    filtrar y transformar los datos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Web Scraping
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
            href="<?= $proyecto["enlace"]; ?>"
            class="boton-proyecto"
        >
            Ver proyecto
        </a>

        <a
            href="index.php"
            class="enlace-proyecto"
        >
            ← Volver al portfolio
        </a>

    </section>


</main>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>


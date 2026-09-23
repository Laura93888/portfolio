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
$tecnologias = $proyecto["tecnologias"];
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
        content="Sistema de scraping avanzado desarrollado con n8n, Apify, Playwright y JavaScript mediante actores personalizados."
    >

    <title><?= $titulo; ?> - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">


    <section class="proyecto-hero">

        <span class="etiqueta-bloque">
            <?= $categoria; ?>
        </span>

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
                href="assets/img/scrappingbots/web_scrapper.png"
                target="_blank"
            >
                <img
                    src="assets/img/scrappingbots/web_scrapper.png"
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
            Un scraper convencional funciona bien cuando la información que
            necesitamos está disponible directamente en una página web.
            El problema aparece cuando es necesario realizar pasos adicionales
            para llegar hasta esos datos.
        </p>

        <p>
            Algunas plataformas requieren autenticación, navegación entre
            diferentes páginas o una estructura específica para localizar
            correctamente la información. Además, en procesos recurrentes es
            necesario controlar qué datos ya se han procesado para evitar
            repetir trabajo y generar duplicados.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                La solución
            </h2>

            <p>
                La solución combina <strong>n8n</strong> como herramienta de
                orquestación con <strong>Apify</strong> como plataforma de
                ejecución de los procesos de scraping.
            </p>

            <p>
                Cuando un scraper convencional no es suficiente, se desarrollan
                actores personalizados adaptados a la estructura concreta de
                cada web.
            </p>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    Scraping convencional
                </h3>

                <p>
                    Extracción de información que ya está disponible
                    directamente en una página web.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Actores personalizados
                </h3>

                <p>
                    Procesos programados específicamente para webs que
                    requieren una lógica de navegación o acceso determinada.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Orquestación con n8n
                </h3>

                <p>
                    Coordina las búsquedas, el procesamiento de datos,
                    los filtros y el almacenamiento de resultados.
                </p>

            </article>

        </div>


        <div class="proyecto-imagen-principal">

            <a
                href="assets/img/scrappingbots/preparacion_urls.png"
                target="_blank"
            >
                <img
                    src="assets/img/scrappingbots/preparacion_urls.png"
                    alt="Preparación de URLs para el proceso de scraping"
                >
            </a>

        </div>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Proceso de automatización
            </h2>

            <p>
                El sistema se adapta a las características de cada plataforma.
                Estos son tres de los flujos desarrollados.
            </p>

        </div>


        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 1
            </span>

            <h3>
                Kelify · Scraping autenticado
            </h3>

            <p>
                El flujo más avanzado del proyecto combina detección de
                novedades con un actor personalizado desarrollado con
                Playwright.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <article class="bloque-tecnico">

                <h3>
                    01 · Detectar nuevos anuncios
                </h3>

                <p>
                    Un primer actor de <strong>Apify</strong> recorre los
                    anuncios de la zona y obtiene sus URLs y fechas de
                    publicación.
                </p>

                <p>
                    n8n compara estas fechas con la última búsqueda registrada
                    para esa zona y descarta los anuncios ya procesados.
                </p>

                <div class="proyecto-imagen-principal">

                    <a
                        href="assets/img/scrappingbots/kelify.png"
                        target="_blank"
                    >
                        <img
                            src="assets/img/scrappingbots/kelify.png"
                            alt="Flujo de scraping de Kelify"
                        >
                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    02 · Acceder mediante el actor personalizado
                </h3>

                <p>
                    Las URLs nuevas se envían a un actor desarrollado con
                    <strong>Playwright</strong>. El actor inicia sesión y
                    mantiene el estado de autenticación durante la ejecución.
                </p>

                <div class="proyecto-imagen-principal">

                    <a
                        href="assets/img/scrappingbots/actor_personalizado.png"
                        target="_blank"
                    >
                        <img
                            src="assets/img/scrappingbots/actor_personalizado.png"
                            alt="Actor personalizado desarrollado con Playwright"
                        >
                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    03 · Extraer la información
                </h3>

                <p>
                    El actor accede a cada anuncio y localiza los datos
                    necesarios mediante selectores CSS y expresiones regulares
                    cuando resultan más adecuadas.
                </p>

                <p>
                    Entre los datos obtenidos se encuentran precio, habitaciones,
                    baños, metros cuadrados, descripción, teléfono y nombre
                    del propietario.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    04 · Procesar y almacenar
                </h3>

                <p>
                    La información vuelve a n8n para ser procesada y
                    almacenada en <strong>Google Sheets</strong>.
                </p>

                <div class="proyecto-imagen-principal">

                    <a
                        href="assets/img/scrappingbots/limpieza_datos.png"
                        target="_blank"
                    >
                        <img
                            src="assets/img/scrappingbots/limpieza_datos.png"
                            alt="Limpieza y procesamiento de los datos obtenidos"
                        >
                    </a>

                </div>

            </article>

        </div>


        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 2
            </span>

            <h3>
                Milanuncios · Scraping sin autenticación
            </h3>

            <p>
                En este caso no es necesario iniciar sesión. El flujo genera
                búsquedas por zona, recorre los anuncios y controla los
                registros ya procesados.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <article class="bloque-tecnico">

                <h3>
                    05 · Generar y recorrer la búsqueda
                </h3>

                <p>
                    El flujo utiliza diferentes zonas configuradas y aplica
                    el filtro para localizar anuncios publicados por
                    particulares.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    06 · Extraer y comprobar
                </h3>

                <p>
                    El actor obtiene título, nombre y URL. n8n compara las
                    URLs obtenidas con las almacenadas en Google Sheets para
                    descartar registros duplicados.
                </p>

                <div class="proyecto-imagen-principal">

                    <a
                        href="assets/img/scrappingbots/milanuncios.png"
                        target="_blank"
                    >
                        <img
                            src="assets/img/scrappingbots/milanuncios.png"
                            alt="Scraping y datos obtenidos de Milanuncios"
                        >
                    </a>

                </div>

            </article>

        </div>


        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 3
            </span>

            <h3>
                Fotocasa · Extracción y control por URL
            </h3>

            <p>
                El mismo patrón se adapta a la estructura de este portal
                mediante ejecuciones periódicas y control de los registros
                mediante su URL.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">

            <article class="bloque-tecnico">

                <h3>
                    07 · Ejecutar y extraer
                </h3>

                <p>
                    Un <strong>Schedule Trigger</strong> inicia la búsqueda
                    correspondiente a cada zona y el actor obtiene título,
                    nombre, URL y teléfono.
                </p>

                <div class="proyecto-imagen-principal">

                    <a
                        href="assets/img/scrappingbots/fotocasa.png"
                        target="_blank"
                    >
                        <img
                            src="assets/img/scrappingbots/fotocasa.png"
                            alt="Scraping y datos obtenidos de Fotocasa"
                        >
                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    08 · Controlar duplicados
                </h3>

                <p>
                    La URL se utiliza como referencia para identificar
                    registros existentes y evitar almacenar varias veces
                    el mismo anuncio.
                </p>

            </article>

        </div>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                El actor personalizado
            </h2>

            <p>
                La parte más avanzada del proyecto es el desarrollo de
                actores adaptados a la forma en la que funciona una web.
            </p>

            <p>
                En el caso de Kelify, el actor utiliza
                <strong>Playwright</strong> para iniciar sesión, mantener
                el estado de autenticación, navegar hasta los anuncios y
                localizar la información necesaria.
            </p>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    Autenticación
                </h3>

                <p>
                    Inicio de sesión automático cuando la información requiere
                    acceso a una zona autenticada.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Navegación
                </h3>

                <p>
                    Acceso a diferentes URLs siguiendo el recorrido necesario
                    para llegar hasta la información.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Selectores personalizados
                </h3>

                <p>
                    Localización de elementos adaptada a la estructura de cada
                    página mediante selectores CSS.
                </p>

            </article>

        </div>


        <div class="bloque-tecnico">

            <h3>
                De una URL a un proceso automatizado
            </h3>

            <p>
                El actor ejecuta la lógica necesaria para acceder al contenido,
                localizar los elementos relevantes y devolver los datos
                estructurados que necesita n8n.
            </p>

            <p>
                <strong>
                    URL → autenticación → navegación →
                    localización → extracción → datos estructurados
                </strong>
            </p>

        </div>


        <div class="proyecto-imagen-principal">

            <a
                href="assets/img/scrappingbots/limpiezadatos2.png"
                target="_blank"
            >
                <img
                    src="assets/img/scrappingbots/limpiezadatos2.png"
                    alt="Procesamiento y limpieza de los datos obtenidos"
                >
            </a>

        </div>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Resultado
            </h2>

        </div>

        <p>
            El resultado es un sistema capaz de automatizar procesos de
            extracción incluso cuando obtener la información requiere algo
            más que acceder directamente a una URL.
        </p>

        <p>
            La arquitectura permite combinar scraping convencional con
            actores personalizados desarrollados específicamente para
            determinadas páginas web.
        </p>

        <p>
            El control de fechas y URLs permite ejecutar las búsquedas de
            forma recurrente sin repetir innecesariamente el trabajo.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Valor técnico
            </h2>

            <p>
                El proyecto demuestra la capacidad de adaptar una
                automatización de scraping a diferentes estructuras y
                necesidades de extracción.
            </p>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    Scraping autenticado
                </h3>

                <p>
                    Desarrollo de actores capaces de iniciar sesión y
                    mantener el estado de autenticación durante la ejecución.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Deduplicación
                </h3>

                <p>
                    Control mediante fechas y URLs para evitar procesar
                    información que ya ha sido almacenada.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Escalabilidad por zonas
                </h3>

                <p>
                    El mismo patrón de automatización puede utilizarse para
                    diferentes zonas sin construir el workflow desde cero.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Actores personalizados
                </h3>

                <p>
                    Desarrollo de actores específicos cuando un scraper
                    convencional no resulta suficiente.
                </p>

            </article>

        </div>

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


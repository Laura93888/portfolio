<?php

require_once 'data/proyectos.php';

$proyecto = null;

foreach ($proyectos["automatizaciones"] as $item) {
    if ($item["titulo"] === "Automatización de extracción de emails") {
        $proyecto = $item;
        break;
    }
}

$titulo = $proyecto["titulo"];
$descripcion = $proyecto["descripcion"];
$tecnologias = $proyecto["tecnologias"];
$categoria = "Automatización e IA";

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Automatización desarrollada con n8n para localizar empresas, analizar sus páginas web y extraer direcciones de email.">

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
            Automatización de captación y extracción de emails
        </h1>

        <p class="proyecto-introduccion">
            Automatización desarrollada con n8n para localizar empresas,
            recopilar sus datos y analizar automáticamente sus páginas web
            en busca de direcciones de email. El flujo incorpora además
            una vía alternativa basada en LinkedIn cuando el proceso
            principal no encuentra un correo.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>El problema</h2>

        </div>

        <p>
            Crear una base de datos de posibles clientes puede implicar
            localizar empresas, recopilar sus datos y acceder a sus páginas
            web una por una para comprobar si disponen de información de
            contacto.
        </p>

        <p>
            Cuando se trabaja con muchas empresas, repetir estas tareas
            manualmente consume tiempo y dificulta mantener la información
            organizada y actualizada.
        </p>

        <p>
            Además, cada página web puede presentar la información de contacto
            de una forma diferente. Por ello, se planteó automatizar tanto
            la recopilación inicial de empresas como el análisis de sus
            páginas web.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>La solución</h2>

            <p>
                La automatización conecta varios procesos para pasar de una
                búsqueda de empresas a una base de datos con información de
                contacto obtenida automáticamente.
            </p>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Captación de empresas</h3>

                <p>
                    El proceso comienza con una búsqueda definida por
                    <strong>nicho y ubicación</strong>. Apify utiliza estos
                    parámetros para localizar empresas en Google Maps y
                    obtener sus datos disponibles, incluida su página web.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Análisis de páginas web</h3>

                <p>
                    Las URLs obtenidas se utilizan como entrada de un segundo
                    workflow. Este accede a cada página, obtiene su contenido
                    HTML y lo analiza mediante <strong>JavaScript</strong>
                    para localizar direcciones de email.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Vía alternativa mediante LinkedIn</h3>

                <p>
                    Si el análisis de la página web no encuentra un email,
                    se puede realizar una búsqueda de la empresa en LinkedIn
                    y obtener perfiles profesionales relacionados para
                    localizar información pública de contacto.
                </p>

            </article>

        </div>


        <div class="proyecto-imagen-principal">

            <a href="assets/img/extraccion_emails/extraccion_maps.png"
               target="_blank">

                <img
                    src="assets/img/extraccion_emails/extraccion_maps.png"
                    alt="Flujo de captación y extracción de datos de empresas"
                    loading="lazy">

            </a>

        </div>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Proceso de automatización</h2>

            <p>
                El proceso principal se divide en dos workflows conectados.
                El primero localiza empresas y recopila sus datos; el segundo
                utiliza las páginas web obtenidas para buscar información de
                contacto.
            </p>

        </div>


        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 1
            </span>

            <h3>
                Captación de empresas
            </h3>

            <p>
                Este workflow parte de una búsqueda definida por nicho y
                ubicación, utiliza Apify para localizar empresas y almacena
                los resultados en Google Sheets.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <article class="bloque-tecnico">

                <h3>
                    01–02 · Definir y preparar la búsqueda
                </h3>

                <p>
                    El proceso comienza indicando el <strong>nicho y la
                    ubicación</strong> que se quieren investigar.
                </p>

                <p>
                    Los datos introducidos se preparan para utilizarlos como
                    parámetros de entrada en la búsqueda de empresas.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/form.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/form.png"
                            alt="Formulario de búsqueda"
                            loading="lazy">

                    </a>

                    <a href="assets/img/extraccion_emails/datos_form.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/datos_form.png"
                            alt="Preparación de los datos de búsqueda"
                            loading="lazy">

                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    03–04 · Localizar empresas y extraer sus datos
                </h3>

                <p>
                    <strong>Apify</strong> ejecuta un actor especializado en
                    Google Maps utilizando los parámetros definidos
                    anteriormente.
                </p>

                <p>
                    El proceso localiza las empresas y obtiene la información
                    disponible, incluyendo datos como nombre, ubicación,
                    teléfono y página web.
                </p>

                <p>
                    La información obtenida queda preparada para continuar
                    con el siguiente workflow, que utilizará las URLs de las
                    páginas web para realizar el análisis.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/actor_maps.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/actor_maps.png"
                            alt="Actor de Apify para la búsqueda en Google Maps"
                            loading="lazy">

                    </a>

                    <a href="assets/img/extraccion_emails/extraccion_maps.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/extraccion_maps.png"
                            alt="Datos extraídos mediante el proceso de Google Maps"
                            loading="lazy">

                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    05 · Almacenar los resultados
                </h3>

                <p>
                    Los resultados obtenidos se incorporan automáticamente a
                    <strong>Google Sheets</strong>, donde cada empresa queda
                    registrada junto con la información recopilada y su
                    página web cuando está disponible.
                </p>

                <p>
                    Esta hoja funciona como punto de conexión entre el primer
                    y el segundo workflow.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/almacenamiento_sheet.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/almacenamiento_sheet.png"
                            alt="Almacenamiento de empresas en Google Sheets"
                            loading="lazy">

                    </a>

                </div>

            </article>

        </div>


        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 2
            </span>

            <h3>
                Análisis de las páginas web
            </h3>

            <p>
                El segundo workflow utiliza las URLs almacenadas para acceder
                a las páginas web y analizar su contenido en busca de
                direcciones de email.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <article class="bloque-tecnico">

                <h3>
                    06–07 · Procesar cada página web
                </h3>

                <p>
                    El workflow trabaja con los nuevos registros disponibles
                    y procesa las empresas individualmente para utilizar la
                    URL de cada una como entrada.
                </p>

                <p>
                    Mediante <strong>HTTP Request</strong>, se realiza una
                    petición a la página web y se obtiene el contenido HTML
                    disponible.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/http_request.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/http_request.png"
                            alt="Petición HTTP para obtener el contenido de una página web"
                            loading="lazy">

                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    08–09 · Analizar el HTML y actualizar el registro
                </h3>

                <p>
                    El contenido HTML obtenido se procesa mediante
                    <strong>JavaScript</strong> para localizar direcciones
                    de email presentes en la página.
                </p>

                <p>
                    Cuando se encuentra información de contacto, el resultado
                    se incorpora al registro correspondiente en
                    <strong>Google Sheets</strong>.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/extracion_email.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/extracion_email.png"
                            alt="Extracción de emails a partir del contenido HTML"
                            loading="lazy">

                    </a>

                </div>

            </article>

        </div>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Vía alternativa · LinkedIn
            </h2>

            <p>
                Cuando el análisis de la página web no permite localizar un
                email, el sistema incorpora una segunda vía para buscar
                información pública de contacto relacionada con la empresa.
            </p>

        </div>


        <div class="bloques-tecnicos">


            <article class="bloque-tecnico">

                <h3>
                    01 · Localizar la empresa
                </h3>

                <p>
                    <strong>SerpAPI</strong> realiza una búsqueda para
                    localizar la página profesional de la empresa en
                    LinkedIn.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/serpApi_linkedin.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/serpApi_linkedin.png"
                            alt="Búsqueda de una empresa en LinkedIn mediante SerpAPI"
                            loading="lazy">

                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    02 · Obtener y validar la URL
                </h3>

                <p>
                    La respuesta obtenida se procesa mediante
                    <strong>JavaScript</strong> para seleccionar la URL de
                    LinkedIn correspondiente a la empresa buscada.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/url_linkedin.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/url_linkedin.png"
                            alt="URL de LinkedIn obtenida y validada"
                            loading="lazy">

                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    03 · Obtener perfiles profesionales
                </h3>

                <p>
                    La URL de la empresa se utiliza como entrada para un
                    actor de <strong>Apify</strong> encargado de obtener
                    perfiles profesionales relacionados con ella.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/actor_linkedin.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/actor_linkedin.png"
                            alt="Actor de Apify para obtener perfiles profesionales"
                            loading="lazy">

                    </a>

                </div>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    04 · Extraer información de contacto
                </h3>

                <p>
                    Los perfiles obtenidos se procesan para seleccionar la
                    información relevante. Cuando existe un email público,
                    puede utilizarse como una fuente adicional de contacto.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/extraer_email_linkedin.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/extraer_email_linkedin.png"
                            alt="Extracción de información de contacto de perfiles profesionales"
                            loading="lazy">

                    </a>

                    <a href="assets/img/extraccion_emails/ampliacion_linkedin.png"
                       target="_blank">

                        <img
                            src="assets/img/extraccion_emails/ampliacion_linkedin.png"
                            alt="Información ampliada de los perfiles obtenidos"
                            loading="lazy">

                    </a>

                </div>

            </article>

        </div>


        <p>
            Esta vía funciona como alternativa al análisis directo de la web.
            No siempre habrá información pública disponible, pero permite
            ampliar las fuentes consultadas cuando el primer proceso no
            encuentra un correo.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Resultado
            </h2>

        </div>

        <p>
            El resultado es un proceso automatizado que parte de una búsqueda
            de empresas, recopila sus datos y utiliza las páginas web
            obtenidas para localizar direcciones de email.
        </p>

        <p>
            Cuando el análisis de la web no encuentra información de contacto,
            se dispone de una segunda vía basada en la búsqueda de perfiles
            profesionales y datos públicos relacionados con la empresa.
        </p>

        <p>
            Toda la información obtenida queda centralizada en
            <strong>Google Sheets</strong>, permitiendo utilizar estos datos
            posteriormente en otros procesos de automatización.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Valor técnico
            </h2>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    Workflows conectados
                </h3>

                <p>
                    El segundo proceso utiliza directamente los datos
                    generados por el primero, creando un flujo de trabajo
                    encadenado.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Scraping automatizado
                </h3>

                <p>
                    Apify permite automatizar la obtención de información
                    tanto de empresas como de perfiles profesionales.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Procesamiento de datos
                </h3>

                <p>
                    JavaScript se utiliza para preparar, filtrar y analizar
                    los datos obtenidos durante los diferentes procesos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Análisis de contenido web
                </h3>

                <p>
                    El sistema obtiene HTML mediante peticiones HTTP y lo
                    procesa para localizar información de contacto.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Múltiples fuentes de información
                </h3>

                <p>
                    El proceso combina Google Maps, páginas web y LinkedIn
                    para ampliar las fuentes desde las que obtener
                    información empresarial.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Datos centralizados
                </h3>

                <p>
                    Google Sheets actúa como punto de almacenamiento y
                    conexión entre los diferentes procesos.
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
                    Diseño y conexión de los diferentes workflows de
                    automatización.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Apify
                </h3>

                <p>
                    Automatización de la extracción de información de
                    empresas y perfiles profesionales.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Sheets
                </h3>

                <p>
                    Almacenamiento y actualización de los datos obtenidos
                    durante el proceso.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    JavaScript
                </h3>

                <p>
                    Preparación, filtrado y procesamiento de los datos,
                    incluido el análisis del contenido HTML.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    HTTP Request
                </h3>

                <p>
                    Obtención del contenido HTML de las páginas web para su
                    posterior análisis.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    SerpAPI
                </h3>

                <p>
                    Búsqueda de páginas profesionales de empresas para
                    utilizar LinkedIn como fuente alternativa.
                </p>

            </article>

        </div>

    </section>


    <section class="enlaces-proyecto">

        <a href="#" class="boton-proyecto">
            Ver automatización
        </a>

        <a href="#" class="boton-proyecto">
            Ver código
        </a>

        <a href="index.php" class="enlace-proyecto">
            ← Volver al portfolio
        </a>

    </section>

</main>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>

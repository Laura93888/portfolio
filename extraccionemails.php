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
$categoria = "Automatización e IA";
$descripcionlarga=$proyecto["descripcionlarga"];

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
    content="<?= htmlspecialchars($proyecto['descripcion'], ENT_QUOTES, 'UTF-8'); ?>">

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

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>El problema</h2>

        </div>

        <p>
            Crear una base de datos de posibles clientes implica localizar
            empresas, recopilar sus datos y entrar en sus webs una por una para encontrar un email de contacto, que cada web muestra de una forma
distinta. Con muchas empresas, hacerlo a mano consume mucho tiempo y la información acaba desorganizada.
        </p>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>La solución</h2>
           
                <p>Un sistema desarrollado en n8n que localiza empresas por nicho y ubicación, analiza sus webs y extrae sus emails de forma totalmente automatizada.
                </p>
           

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

            <p>
                Si no encuentra el email en la web, busca contactos de alto nivel de la empresa por LinkedIn, lo que permite ampliar las fuentes consultadas cuando el primer proceso no encuentra un correo.
            </p>

            <div class="proyecto-imagen-principal">

            <a href="assets/img/extraccion_emails/ampliacion_linkedin.png"
               target="_blank">

                <img
                    src="assets/img/extraccion_emails/ampliacion_linkedin.png"
                    alt="Flujo de extraccion de información de Linkedin"
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
                Tres fases conectadas por Google Sheets, con una vía
                alternativa por LinkedIn para las webs sin email.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <!-- FASE 1 -->

            <article class="bloque-tecnico">

                <h3>
                    Fase 1 · Captación de empresas
                </h3>

                <p>
                    Un formulario recoge el nicho y la ubicación, y n8n lanza un
                    actor de <strong>Apify</strong> que busca las empresas en
                    Google Maps. Los resultados (nombre, ubicación, teléfono y dirección web) se guardan en <strong>Google Sheets</strong>, que hace
                    de punto de conexión con los siguientes flujos.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/actor_maps.png"
                       target="_blank">

                        <img src="assets/img/extraccion_emails/actor_maps.png"
                             alt="Actor de Apify para la búsqueda en Google Maps">

                    </a>

                </div>

            </article>


            <!-- FASE 2 -->

            <article class="bloque-tecnico">

                <h3>
                    Fase 2 · Búsqueda de emails en las webs
                </h3>

                <p>
                    Para cada empresa, el flujo busca las direcciones webs obtenidas y entra directamente a ellas usando un <strong>HTTP Request</strong> para obtener el HTML. Después, mediante código <strong>JavaScript</strong>, lee y analiza ese texto de en busca de cualquier dirección de email corporativo. Los emails que encuentra los guarda en la hoja de
                    <strong>Google Sheets</strong>.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/extracion_email.png"
                       target="_blank">

                        <img src="assets/img/extraccion_emails/extracion_email.png"
                             alt="Extracción de emails a partir del HTML de una web">

                    </a>

                </div>

            </article>


            <!-- FASE 3 -->

            <article class="bloque-tecnico">

                <h3>
                    Fase 3 · Contactos de LinkedIn para las webs sin email
                </h3>

                <p>
                    Otro flujo revisa la hoja de Sheets y detecta las empresas en las que no se encontró ningún email. Para esas,
                    <strong>SerpAPI</strong> busca la dirección de Linkedin de la empresa en Google, procesando la respuesta mediante
                    <strong>JavaScript</strong> para asegurar que la URL corresponde con la empresa buscada. 
                </p>

    

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/extraer_email_linkedin.png"
                       target="_blank">

                        <img src="assets/img/extraccion_emails/url_linkedin.png"
                             alt="Extracción de contacto a partir de perfiles de LinkedIn">

                    </a>

                </div>
                
                <p>A continuación un actor de <strong>Apify</strong> extrae los perfiles profesionales de altos cargos de cada uno de estos links de empresas. A partir de los perfiles extraídos, con JavaScript se procesa la respuesta para extraer el email principal, direcciones email alternativas y el perfil de LinkedIn
                </p>
                <div class="proyecto-imagen-principal">

                    <a href="assets/img/extraccion_emails/extraer_email_linkedin.png"
                       target="_blank">

                        <img src="assets/img/extraccion_emails/extraer_email_linkedin.png"
                             alt="Extracción de contacto a partir de perfiles de LinkedIn">

                    </a>

                </div>

            </article>

    </section>


    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Resultado
            </h2>

        </div>

        <p>
            Un sistema 100% autónomo que elimina las horas de trabajo manual en prospección. En lugar de revisar webs una por una, el sistema entrega una base de datos limpia, organizada y enriquecida directamente en Google Sheets.
        </p>

        <p>
            De este modo, obtienes listados listos para usar en tus campañas comerciales, combinando tanto correos corporativos como contactos directos de LinkedIn de forma totalmente automatizada.
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
                    Diseño y conexión de los diferentes workflows de la
                    automatización.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Apify
                </h3>

                <p>
                    Uso de actores especializados para el scraping automatizado: uno realiza la extracción masiva de empresas en Google Maps y otro extrae los perfiles profesionales en LinkedIn.
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
                    Consulta directa del código fuente HTML de los sitios web para su posterior análisis.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    SerpAPI
                </h3>

                <p>
                    Búsqueda en Google de páginas profesionales de empresas para utilizar LinkedIn como fuente alternativa.
                </p>

            </article>

        </div>

    </section>


    <section class="enlaces-proyecto">

        <a href="mis-proyectos.php?categoria=automatizaciones" class="enlace-proyecto">
            ← Todos los proyectos
        </a>

    </section>

</main>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>

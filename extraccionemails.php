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


    <!-- =====================================================
         CABECERA
         ===================================================== -->

    <section class="proyecto-hero">

        <span class="etiqueta-bloque">
            <?= $categoria; ?>
        </span>

        <h1>
            Automatización de captación y extracción de emails
        </h1>

        <p class="proyecto-introduccion">
            Automatización desarrollada con n8n que conecta la búsqueda de
            empresas con un proceso de análisis de sus páginas web para
            localizar direcciones de email. Como vía alternativa, incorpora
            una búsqueda de perfiles profesionales en LinkedIn cuando el
            proceso principal no encuentra un correo.
        </p>

    </section>


    <!-- =====================================================
         EL PROBLEMA
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>El problema</h2>

        </div>

        <p>
            La creación de una base de datos de posibles clientes puede
            requerir localizar empresas, recopilar sus datos y visitar sus
            páginas web una por una para comprobar si disponen de información
            de contacto.
        </p>

        <p>
            Cuando se trabaja con muchas empresas, repetir manualmente estas
            tareas consume tiempo y dificulta mantener la información
            organizada.
        </p>

        <p>
            Además, cada página web puede mostrar la información de contacto
            de una forma diferente. Por ello, era necesario crear un proceso
            capaz de acceder a las webs y analizar su contenido para localizar
            automáticamente las direcciones de email que aparecen en ellas.
        </p>

    </section>


    <!-- =====================================================
         LA SOLUCIÓN
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>La solución</h2>

            <p>
                La automatización se estructura en dos procesos principales
                conectados entre sí y una vía alternativa para los casos en
                los que el proceso principal no encuentra un email.
            </p>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Captación de empresas</h3>

                <p>
                    El primer proceso parte de una búsqueda por
                    <strong>nicho y ubicación</strong>. Apify obtiene los
                    resultados de Google Maps y recopila los datos disponibles
                    de cada empresa, incluida su página web cuando está
                    disponible.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Análisis de las páginas web</h3>

                <p>
                    El segundo proceso utiliza las URLs obtenidas anteriormente.
                    Accede a cada página, obtiene su contenido HTML y lo
                    analiza mediante JavaScript para localizar direcciones
                    de email presentes en ese contenido.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Vía alternativa mediante LinkedIn</h3>

                <p>
                    Cuando el proceso principal no encuentra un email,
                    SerpAPI permite localizar la página profesional de la
                    empresa en LinkedIn. Apify obtiene perfiles profesionales
                    relacionados y, cuando contienen emails públicos, estos
                    pueden utilizarse como otra fuente de contacto.
                </p>

            </article>

        </div>


        <div class="proyecto-imagen-principal">

            <div class="placeholder-imagen">

                <span>
                    Google Maps → Apify → Google Sheets →
                    análisis de webs → emails →
                    LinkedIn como vía alternativa
                </span>

            </div>

        </div>

    </section>


    <!-- =====================================================
         PROCESO DE AUTOMATIZACIÓN
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Proceso de automatización</h2>

            <p>
                El proceso principal está formado por dos workflows
                relacionados. El primero obtiene las empresas y sus páginas
                web; el segundo utiliza esas URLs para analizar su contenido.
            </p>

        </div>


        <!-- =================================================
             PROCESO 1
             ================================================= -->

        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 1
            </span>

            <h3>
                Captación de empresas
            </h3>

            <p>
                Este workflow localiza empresas a partir de un nicho y una
                ubicación y almacena sus datos. La URL de la página web es
                especialmente importante porque será utilizada como entrada
                en el segundo proceso.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <!-- PASO 1 -->

            <article class="bloque-tecnico">

                <h3>
                    01 · Definir la búsqueda
                </h3>

                <p>
                    El proceso comienza indicando el
                    <strong>nicho y la ubicación</strong> que se quieren
                    investigar.
                </p>

                <p>
                    Estos datos se utilizan como parámetros para realizar la
                    búsqueda de empresas.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del formulario de entrada
                    </span>

                </div>

            </article>


            <!-- PASO 2 -->

            <article class="bloque-tecnico">

                <h3>
                    02 · Preparar los datos de entrada
                </h3>

                <p>
                    La información introducida se prepara y transforma para
                    utilizarla como entrada del proceso de búsqueda.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del nodo de preparación de datos
                    </span>

                </div>

            </article>


            <!-- PASO 3 -->

            <article class="bloque-tecnico">

                <h3>
                    03 · Localizar empresas en Google Maps
                </h3>

                <p>
                    <strong>Apify</strong> ejecuta un actor especializado en
                    Google Maps para localizar empresas que coincidan con los
                    criterios definidos.
                </p>

                <p>
                    Entre los datos obtenidos pueden encontrarse el nombre,
                    dirección, teléfono y página web de cada empresa.
                </p>

                <p>
                    La URL de la página web será posteriormente utilizada por
                    el segundo proceso para acceder a ella y analizar su
                    contenido.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del input y output de Apify
                    </span>

                </div>

            </article>


            <!-- PASO 4 -->

            <article class="bloque-tecnico">

                <h3>
                    04 · Almacenar los resultados
                </h3>

                <p>
                    Los resultados obtenidos se incorporan automáticamente a
                    <strong>Google Sheets</strong>, creando una base de datos
                    estructurada con la información de las empresas.
                </p>

                <p>
                    La URL de la página web queda almacenada junto al resto
                    de los datos para poder utilizarla posteriormente.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura de los registros en Google Sheets
                    </span>

                </div>

            </article>

        </div>


        <!-- =================================================
             PROCESO 2
             ================================================= -->

        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 2
            </span>

            <h3>
                Análisis de las páginas web
            </h3>

            <p>
                Este workflow utiliza los registros generados por el primero.
                Su objetivo actual es acceder a las páginas web obtenidas y
                localizar direcciones de email presentes en su contenido HTML.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <!-- PASO 5 -->

            <article class="bloque-tecnico">

                <h3>
                    05 · Detectar nuevos registros
                </h3>

                <p>
                    El segundo flujo se activa cuando se detectan nuevos
                    registros en <strong>Google Sheets</strong>.
                </p>

                <p>
                    Antes de continuar, se comprueba que el registro tenga
                    una página web disponible y que todavía no disponga de un
                    email obtenido por el proceso.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del trigger y las condiciones de filtrado
                    </span>

                </div>

            </article>


            <!-- PASO 6 -->

            <article class="bloque-tecnico">

                <h3>
                    06 · Procesar cada empresa
                </h3>

                <p>
                    Las URLs se procesan mediante
                    <strong>Loop Over Items</strong>, permitiendo tratar cada
                    empresa individualmente.
                </p>

                <p>
                    De esta forma, el mismo proceso puede aplicarse de manera
                    sucesiva a los diferentes registros obtenidos.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del Loop Over Items
                    </span>

                </div>

            </article>


            <!-- PASO 7 -->

            <article class="bloque-tecnico">

                <h3>
                    07 · Obtener el HTML de la página
                </h3>

                <p>
                    Para cada URL, el nodo
                    <strong>HTTP Request</strong> realiza una petición a la
                    página web y obtiene el contenido HTML disponible.
                </p>

                <p>
                    Este contenido será la entrada que posteriormente
                    analizará el código JavaScript.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del nodo HTTP Request y su respuesta
                    </span>

                </div>

            </article>


            <!-- PASO 8 -->

            <article class="bloque-tecnico">

                <h3>
                    08 · Analizar el HTML y localizar emails
                </h3>

                <p>
                    El HTML obtenido se procesa mediante
                    <strong>JavaScript</strong>. El código analiza el
                    contenido y busca patrones que correspondan a direcciones
                    de email.
                </p>

                <p>
                    Actualmente el proceso está diseñado para localizar
                    correos electrónicos, aunque la misma lógica podría
                    adaptarse para buscar otros datos presentes en el HTML.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del código JavaScript
                    </span>

                </div>

                <div class="placeholder-imagen">

                    <span>
                        Captura del resultado obtenido
                    </span>

                </div>

            </article>


            <!-- PASO 9 -->

            <article class="bloque-tecnico">

                <h3>
                    09 · Actualizar el registro
                </h3>

                <p>
                    Cuando se encuentra una dirección de email, el dato se
                    incorpora automáticamente al registro correspondiente de
                    <strong>Google Sheets</strong>.
                </p>

                <p>
                    De esta forma, la información obtenida durante el análisis
                    de la página queda asociada a la empresa original.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del registro final actualizado
                    </span>

                </div>

            </article>

        </div>

    </section>


    <!-- =====================================================
         VÍA ALTERNATIVA · LINKEDIN
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Vía alternativa · Búsqueda de perfiles profesionales
            </h2>

            <p>
                Cuando el proceso principal no consigue encontrar un email en
                la página web, se puede utilizar una segunda vía basada en
                LinkedIn.
            </p>

        </div>


        <div class="bloques-tecnicos">


            <!-- LINKEDIN 01 -->

            <article class="bloque-tecnico">

                <h3>
                    01 · Localizar la empresa en LinkedIn
                </h3>

                <p>
                    A partir del nombre de la empresa,
                    <strong>SerpAPI</strong> realiza una búsqueda en Google
                    para localizar su página profesional en LinkedIn.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura de la búsqueda mediante SerpAPI
                    </span>

                </div>

            </article>


            <!-- LINKEDIN 02 -->

            <article class="bloque-tecnico">

                <h3>
                    02 · Validar la página encontrada
                </h3>

                <p>
                    La respuesta obtenida se procesa mediante
                    <strong>JavaScript</strong> para filtrar los resultados
                    y comprobar que la URL encontrada corresponde con la
                    empresa buscada.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del procesamiento y filtrado
                    </span>

                </div>

            </article>


            <!-- LINKEDIN 03 -->

            <article class="bloque-tecnico">

                <h3>
                    03 · Obtener perfiles profesionales
                </h3>

                <p>
                    La página de empresa encontrada se utiliza como entrada
                    para un actor de <strong>Apify</strong> especializado en
                    obtener perfiles profesionales relacionados con esa
                    empresa.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del actor de Apify
                    </span>

                </div>

            </article>


            <!-- LINKEDIN 04 -->

            <article class="bloque-tecnico">

                <h3>
                    04 · Filtrar la información obtenida
                </h3>

                <p>
                    Los perfiles obtenidos se procesan mediante un nodo de
                    código para seleccionar la información que interesa
                    incorporar al registro.
                </p>

                <p>
                    Cuando un perfil contiene un email público, este dato
                    puede utilizarse como una fuente adicional de contacto.
                </p>

                <div class="placeholder-imagen">

                    <span>
                        Captura del código y resultado final
                    </span>

                </div>

            </article>

        </div>


        <p>
            Esta vía no sustituye al proceso principal, sino que funciona
            como una alternativa para los casos en los que no se ha
            encontrado un correo electrónico directamente en la página web
            de la empresa.
        </p>

    </section>


    <!-- =====================================================
         RESULTADO
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Resultado
            </h2>

        </div>

        <p>
            El resultado es un proceso que parte de una búsqueda de empresas,
            recopila sus datos y utiliza las páginas web obtenidas para
            buscar automáticamente direcciones de email.
        </p>

        <p>
            Cuando una empresa no proporciona un correo que pueda localizarse
            mediante el análisis de su página web, el sistema dispone de una
            segunda vía basada en perfiles profesionales de LinkedIn, siempre
            que exista información pública disponible.
        </p>

        <p>
            Los datos obtenidos quedan centralizados en
            <strong>Google Sheets</strong>, donde pueden utilizarse
            posteriormente en otros procesos de automatización.
        </p>

    </section>


    <!-- =====================================================
         VALOR PARA LA EMPRESA
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                ¿Qué puede aportar a una empresa?
            </h2>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    Reduce tareas manuales
                </h3>

                <p>
                    Automatiza parte del proceso de búsqueda de empresas,
                    acceso a sus páginas web y localización de información
                    de contacto.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Conecta diferentes procesos
                </h3>

                <p>
                    El segundo workflow aprovecha directamente los datos
                    generados por el primero, utilizando las páginas web
                    obtenidas como entrada.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Centraliza la información
                </h3>

                <p>
                    Los datos obtenidos se almacenan y actualizan en
                    <strong>Google Sheets</strong>, facilitando su posterior
                    utilización en otros procesos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Dispone de una vía alternativa
                </h3>

                <p>
                    Cuando el análisis de la web no encuentra un email, el
                    proceso puede recurrir a información pública disponible
                    en perfiles profesionales.
                </p>

            </article>

        </div>

    </section>


    <!-- =====================================================
         TECNOLOGÍAS
         ===================================================== -->

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
                    Diseño, conexión y ejecución de los diferentes workflows.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Apify
                </h3>

                <p>
                    Obtención automatizada de información de Google Maps y
                    de perfiles profesionales.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Sheets
                </h3>

                <p>
                    Almacenamiento y actualización de los registros obtenidos
                    durante el proceso.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    JavaScript
                </h3>

                <p>
                    Preparación, procesamiento y filtrado de datos,
                    incluyendo el análisis del HTML para localizar
                    direcciones de email.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    HTTP Request
                </h3>

                <p>
                    Petición de páginas web y obtención de su contenido HTML
                    para su posterior procesamiento.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    SerpAPI
                </h3>

                <p>
                    Búsqueda de páginas profesionales de empresas en Google
                    para utilizar LinkedIn como vía alternativa.
                </p>

            </article>

        </div>

    </section>


    <!-- =====================================================
         ENLACES
         ===================================================== -->

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
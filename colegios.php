<?php

require_once 'data/proyectos.php';

$proyecto = null;
$proyecto = $proyectos["desarrollo"][4];

$titulo = $proyecto["titulo"];
$descripcion = $proyecto["descripcion"];
$tecnologias = $proyecto["tecnologias"];
$categoria = "Desarrollo Web";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Madrid Colegios - Proyecto de desarrollo web de Laura Basurto.">

    <title><?= $titulo; ?> - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">

    <!-- CABECERA -->
    <section class="proyecto-hero">

        <span class="etiqueta-bloque">
            <?= $categoria; ?>
        </span>

        <h1><?= $titulo; ?></h1>

        <p class="proyecto-introduccion">
            <?= $descripcion; ?>
        </p>

    </section>


    <!-- IMAGEN PRINCIPAL -->
    <section class="proyecto-imagen-principal">

        <div class="placeholder-imagen">
            <span>Captura principal del proyecto</span>
        </div>

    </section>


    <!-- SOBRE EL PROYECTO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Sobre el proyecto</h2>


        </div>

        <p>
            Madrid Colegios es una aplicación web desarrollada con
            <strong>PHP</strong> que utiliza una
            <strong>API pública de datos abiertos del Ayuntamiento de Madrid</strong>
            para consultar información sobre colegios públicos.
        </p>

        <p>
            El proyecto permite buscar colegios por nombre, consultar sus
            principales datos y acceder directamente a su ubicación mediante
            <strong>Google Maps</strong>.
        </p>

        <p>
            El objetivo principal fue trabajar de forma práctica con
            <strong>APIs externas</strong>, datos en formato
            <strong>JSON</strong> y generación dinámica de contenido con PHP.
        </p>

    </section>


    <!-- FUNCIONALIDADES -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Funcionalidades</h2>

            <p>
                Principales funcionalidades desarrolladas en la aplicación.
            </p>

        </div>

        <div class="funcionalidades-proyecto">

            <article class="tarjeta-funcionalidad">

                <h3>Consulta de colegios</h3>

                <p>
                    Obtención y visualización de información sobre colegios
                    públicos de Madrid mediante una API.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Búsqueda</h3>

                <p>
                    Búsqueda de colegios por <strong>nombre</strong>
                    mediante un formulario GET.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Información detallada</h3>

                <p>
                    Consulta de localidad, código postal, dirección y
                    coordenadas del centro.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Localización</h3>

                <p>
                    Acceso directo a la ubicación del colegio mediante
                    <strong>Google Maps</strong>.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Resultados dinámicos</h3>

                <p>
                    Los colegios se muestran dinámicamente a partir de los
                    datos obtenidos desde la API.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Mensajes de error</h3>

                <p>
                    La aplicación informa cuando no se encuentra ningún
                    colegio y gestiona errores básicos de conexión.
                </p>

            </article>

        </div>

    </section>


    <!-- DESARROLLO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Desarrollo</h2>

            <p>
                Tecnologías y principales aspectos técnicos del proyecto.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Frontend</h3>

                <p>
                    <strong>HTML5, CSS3 y Bootstrap</strong> se utilizan
                    para construir la interfaz y conseguir un diseño
                    adaptable a diferentes tamaños de pantalla.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> se encarga de realizar las peticiones,
                    procesar los datos recibidos y generar dinámicamente
                    el contenido de la aplicación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>API y cURL</h3>

                <p>
                    Se utiliza <strong>cURL</strong> para realizar una
                    petición HTTP a la API pública de datos abiertos del
                    Ayuntamiento de Madrid.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>JSON</h3>

                <p>
                    La respuesta de la API se recibe en formato
                    <strong>JSON</strong> y se convierte en un array asociativo
                    de PHP mediante <strong>json_decode()</strong>.
                </p>

                <p>
                    Además, se trabaja con <strong>datos anidados</strong> para
                    acceder a información como la localidad y las coordenadas
                    geográficas de cada colegio.
                </p>

            </article>
        </div>

    </section>


    <!-- CÓMO FUNCIONA -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Cómo funciona una búsqueda</h2>

            <p>
                Recorrido de los datos desde la consulta del usuario hasta
                la información mostrada.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>01 · Búsqueda</h3>

                <p>
                    El usuario introduce el nombre del colegio mediante
                    un formulario.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>02 · GET</h3>

                <p>
                    El término de búsqueda se envía mediante una petición
                    <strong>GET</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>03 · API</h3>

                <p>
                    PHP realiza la petición a la API mediante
                    <strong>cURL</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>04 · JSON</h3>

                <p>
                    La respuesta JSON se procesa y se obtiene la información
                    de los colegios.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>05 · Filtrado</h3>

                <p>
                    Se compara el texto introducido con el nombre de cada
                    colegio utilizando <strong>str_contains()</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>06 · Resultado</h3>

                <p>
                    Se muestran los colegios encontrados junto con sus datos
                    y su ubicación en Google Maps.
                </p>

            </article>

        </div>

    </section>


    <!-- CAPTURAS -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Capturas del proyecto</h2>

            <p>
                Algunas vistas de la aplicación y de sus funcionalidades.
            </p>

        </div>

        <div class="galeria-proyecto">

            <div class="placeholder-imagen">
                <span>Captura 1</span>
            </div>

            <div class="placeholder-imagen">
                <span>Captura 2</span>
            </div>

            <div class="placeholder-imagen">
                <span>Captura 3</span>
            </div>

            <div class="placeholder-imagen">
                <span>Captura 4</span>
            </div>

        </div>

    </section>


    <!-- RETOS Y APRENDIZAJES -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Retos y aprendizajes</h2>

        </div>

        <p>
            Uno de los principales retos fue trabajar con una fuente de datos
            externa y comprender la estructura de la información recibida
            en formato JSON.
        </p>

        <p>
            Durante el desarrollo puse en práctica:
        </p>

        <ul>

            <li>
                <strong>Consumo de APIs:</strong> realización de peticiones
                HTTP a servicios externos.
            </li>

            <li>
                <strong>cURL:</strong> conexión con una API desde PHP.
            </li>

            <li>
                <strong>JSON:</strong> procesamiento de información recibida
                desde una API externa.
            </li>

            <li>
                <strong>Datos anidados:</strong> acceso a diferentes niveles
                de una estructura JSON.
            </li>

            <li>
                <strong>GET:</strong> utilización de parámetros para realizar
                búsquedas.
            </li>

            <li>
                <strong>Datos geográficos:</strong> utilización de latitud y
                longitud para generar enlaces a Google Maps.
            </li>

        </ul>

        <p>
            El proyecto me permitió consolidar el trabajo con
            <strong>PHP, APIs externas y JSON</strong>, entendiendo cómo
            obtener, procesar y mostrar dinámicamente información procedente
            de una fuente externa.
        </p>

    </section>


    <!-- ENLACES -->
    <section class="enlaces-proyecto">

        <a href="#" class="boton-proyecto">
            Ver proyecto
        </a>

        <a href="#" class="boton-proyecto">
            Ver código en GitHub
        </a>

        <a href="index.php" class="enlace-proyecto">
            ← Volver al portfolio
        </a>

    </section>

</main>

<?php require_once 'includes/footer.php'; ?>

</body>
</html>
<?php

require_once 'data/proyectos.php';

$proyecto = $proyectos["desarrollo"][4];

$titulo = $proyecto["titulo"];
$descripcion = $proyecto["descripcion"];
$tecnologias = $proyecto["tecnologias"];
$categoria = "Desarrollo Web";
$descripcionlarga=$proyecto["descripcionlarga"];

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
            <?= $descripcionlarga; ?>
        </p>

    </section>


    <section class="proyecto-imagen-principal">

        <div class="captura-principal">

            <div>

                <img
                    src="/assets/img/colegios/paginappal.png"
                    alt="Página principal de Madrid Colegios"
                >

                <p>Página principal de la aplicación</p>

            </div>

        </div>

    </section>
                <!-- CONSULTA DE CENTROS -->

                <section class="seccion-proyecto">

                    <div class="cabecera-seccion">

                        <h2>Consulta de centros</h2>

                        <p>
                            La aplicación permite consultar información de los centros
                            educativos a partir de los datos obtenidos mediante la API.
                        </p>

                    </div>


                    <div class="galeria-proyecto">

                        <div>

                            <img
                                src="/assets/img/colegios/datoscentro.png"
                                alt="Información de un colegio en Madrid Colegios"
                                style="height: auto;"
                            >

                        </div>


                        <div>

                            <h3>Información del centro</h3>

                            <p>
                                Una vez realizada la búsqueda, la aplicación muestra los
                                principales datos disponibles del colegio.
                            </p>

                            <p>
                                Se muestran datos como
                                <strong>localidad, información general, código postal y dirección</strong>,
                                junto con las coordenadas necesarias para su localización.
                            </p>

                            <p>
                                La información se obtiene directamente de la
                                <strong>API de datos abiertos del Ayuntamiento de Madrid</strong>.
                            </p>

                        </div>

                    </div>

                </section>
    <!-- DESARROLLO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Desarrollo</h2>
            <p>
                Principales aspectos técnicos desarrollados para integrar la API,
                gestionar las consultas y mostrar la información de los centros.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>Consulta dinámica</h3>
                <p>
                    La búsqueda se realiza de forma dinámica mediante
                    <strong>JavaScript</strong>, mostrando los resultados a medida
                    que el usuario introduce el nombre del centro, sin necesidad
                    de recargar la página ni pulsar un botón de búsqueda.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Integración de la API</h3>
                <p>
                    <strong>PHP</strong> realiza las peticiones a la
                    <strong>API de datos abiertos del Ayuntamiento de Madrid</strong>
                    mediante <strong>cURL</strong>. La respuesta se recibe en
                    formato <strong>JSON</strong> y se procesan los datos necesarios
                    para mostrar la información de cada centro.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Localización en Google Maps</h3>
                <p>
                    Las coordenadas obtenidas de los centros se utilizan para
                    generar dinámicamente los enlaces de localización mediante
                    <strong>JavaScript</strong>, permitiendo acceder directamente
                    a su ubicación en <strong>Google Maps</strong>.
                </p>
            </article>

        </div>
    </section>

    <!-- FLUJO -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Cómo funciona</h2>

            <p>
                Del término de búsqueda al resultado mostrado.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>01 · Buscar</h3>

                <p>
                    El usuario introduce el nombre del colegio mediante
                    el formulario.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>02 · Consultar</h3>

                <p>
                    PHP recibe el término mediante <strong>GET</strong> y
                    realiza la petición a la API utilizando
                    <strong>cURL</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>03 · Procesar</h3>

                <p>
                    La respuesta <strong>JSON</strong> se convierte en un
                    array de PHP y se procesan los datos obtenidos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>04 · Mostrar</h3>

                <p>
                    Se muestran los colegios encontrados junto con sus
                    datos y su ubicación en Google Maps.
                </p>

            </article>

        </div>

    </section>


    <!-- ENLACES -->

    <section class="enlaces-proyecto">

        <a href="https://colegiosmadrid.infinityfreeapp.com/" class="boton-proyecto">
            Ver proyecto
        </a>

        <a href="https://github.com/Laura93888/ColegiosMadrid" class="boton-proyecto">
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
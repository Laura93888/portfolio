<?php

require_once 'data/proyectos.php';

$proyecto = $proyectos["desarrollo"][3];

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

    <meta name="description" content="Weatherly - Aplicación web de consulta meteorológica de Laura Basurto.">

    <title>Weatherly - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">

    <!-- CABECERA DEL PROYECTO -->
    <section class="proyecto-hero">

        <span class="etiqueta-bloque">
            <?= $categoria; ?>
        </span>

        <h1><?= $titulo; ?></h1>

        <p class="proyecto-introduccion">
            <?= $descripcionlarga; ?>
        </p>

    </section>


    <!-- CAPTURAS DEL PROYECTO -->
    <section class="proyecto-imagen-principal">

        <div>
            <img 
                src="/assets/img/weatherly/pantallappal.png" 
                alt="Pantalla de inicio de Weatherly">

            <p>Pantalla de inicio</p>
        </div>

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

                <img src="/assets/img/weatherly/busqueda.png" alt="Búsqueda y selección de ubicación en Weatherly" >

                <h3>Búsqueda y selección de ubicación</h3>

                <p>
                    El usuario introduce una <strong>ciudad</strong> y la aplicación
                    muestra las coincidencias encontradas para que pueda seleccionar
                    la <strong>ubicación correcta</strong> antes de realizar la
                    consulta meteorológica. Si no se encuentra ninguna coincidencia,
                    se informa al usuario mediante un <strong>mensaje</strong>.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <img src="/assets/img/weatherly/resultado-dia.png" alt="Información meteorológica en Weatherly" >

                <h3>Información meteorológica</h3>

                <p>
                    Una vez seleccionada la ubicación, la aplicación muestra
                    diferentes datos meteorológicos como
                    <strong>temperatura, sensación térmica, humedad, viento,
                    nubosidad y precipitación</strong>, además de la
                    <strong>hora local</strong>.
                </p>

            </article>

            <article class="tarjeta-funcionalidad">

                <img src="/assets/img/weatherly/resultado-noche.png" alt="Adaptación a noche" >

                <h3>Adaptación día y noche</h3>

                <p>
                    La aplicación identifica si en la ubicación consultada es
                    <strong>de día o de noche</strong> y adapta la apariencia de
                    la interfaz en función de esta información.
                </p>

            </article>

            <article class="tarjeta-funcionalidad">

                <img src="/assets/img/weatherly/ultimasbusquedas.png" alt="Historial de búsquedas en Weatherly" style="height: auto; width: 100%;" >

                <h3>Historial de búsquedas</h3>

                <p>
                    Las últimas <strong>5 ubicaciones consultadas</strong> se
                    almacenan mediante cookies para poder recuperarlas y volver a consultar su información directamente. Si el usuario realiza una búsqueda que ya está guardada, esta se actualiza y pasa a ocupar el primer lugar del historial, <strong>evitando duplicados</strong>. 
                </p>

            </article>

        </div>

    </section>

    <!-- DESARROLLO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Desarrollo</h2>

            <p>
                Tecnologías y servicios utilizados para construir la aplicación.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Frontend</h3>

                <p>
                    <strong>HTML, CSS y JavaScript</strong> se utilizan para
                    construir la interfaz, gestionar la interacción con el usuario
                    y adaptar la presentación de la información según los datos
                    obtenidos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> gestiona la lógica de la aplicación y
                    utiliza <strong>cURL</strong> para realizar las peticiones a
                    las APIs. Las respuestas recibidas se procesan en formato
                    <strong>JSON</strong> antes de generar la información que se
                    muestra en la interfaz.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>APIs y servicios externos</h3>

                <p>
                    <strong>Open-Meteo Geocoding API</strong> permite obtener las
                    coordenadas de la ubicación seleccionada, que posteriormente
                    se utilizan para consultar <strong>WeatherAPI</strong> y
                    obtener la información meteorológica actual.
                </p>

            </article>

        </div>

    </section>


    <!-- SEGURIDAD Y ERRORES -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Seguridad y gestión de errores</h2>

            <p>
                Medidas aplicadas para proteger las credenciales y controlar
                posibles problemas durante las consultas.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Protección de las API Keys</h3>

                <p>
                    La clave de <strong>WeatherAPI</strong> se almacena mediante
                    una variable de entorno y el archivo correspondiente se
                    mantiene fuera del repositorio mediante <strong>.gitignore</strong>.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>Gestión de errores</h3>

                <ul>
                    <li>Ubicación no encontrada.</li>
                    <li>Error de conexión con las APIs.</li>
                    <li>Respuesta HTTP incorrecta.</li>
                    <li>Respuesta de la API con error.</li>
                </ul>

            </article>

            <article class="bloque-tecnico">

                <h3>Respuesta al usuario</h3>

                <p>
                    Cuando se produce un problema, la aplicación muestra
                    <strong>mensajes informativos</strong> en lugar de dejar
                    la interfaz sin respuesta.
                </p>

            </article>

        </div>

    </section>


    <!-- ENLACES -->
    <section class="enlaces-proyecto">

        <a href="http://weatherly.infinityfreeapp.com/" class="boton-proyecto">
            Ver página web
        </a>

        <a href="https://github.com/Laura93888/API-El-tiempo" class="boton-proyecto">
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

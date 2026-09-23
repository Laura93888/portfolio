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
                src="/assets/img/weatherly/busqueda.png" 
                alt="Pantalla de búsqueda de Weatherly">

            <p>Pantalla de búsqueda</p>
        </div>

        <div class="galeria-proyecto">

            <div>
                <img 
                    src="/assets/img/weatherly/resultado-dia.png" 
                    alt="Resultado meteorológico de Weatherly durante el día">

                <p>Resultado durante el día</p>
            </div>

            <div>
                <img 
                    src="/assets/img/weatherly/resultado-noche.png" 
                    alt="Resultado meteorológico de Weatherly durante la noche">

                <p>Resultado durante la noche</p>
            </div>

        </div>

    </section>
    </section>


    <!-- SOBRE EL PROYECTO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Sobre el proyecto</h2>
        </div>

        <p>
            <strong>Weatherly</strong> es una aplicación web desarrollada con
            <strong>PHP</strong> para consultar el tiempo actual de una ubicación.
        </p>

        <p>
            El proyecto integra <strong>dos APIs con funciones diferentes</strong>:
            <strong>Open-Meteo Geocoding</strong> se utiliza para localizar la
            ciudad y obtener sus coordenadas, mientras que <strong>WeatherAPI</strong>
            utiliza esas coordenadas para proporcionar la información meteorológica.
        </p>

        <p>
            Además, las últimas <strong>5 ubicaciones consultadas</strong> se
            almacenan mediante cookies para poder volver a consultarlas
            directamente desde la aplicación.
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
                <h3>Búsqueda de ubicaciones</h3>

                <p>
                    El usuario introduce una ciudad y puede seleccionar entre
                    diferentes coincidencias cuando es necesario.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Información meteorológica</h3>

                <p>
                    Muestra <strong>temperatura, sensación térmica, humedad,
                    viento, nubosidad y precipitación</strong>, entre otros datos.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Hora local</h3>

                <p>
                    Muestra la <strong>hora local</strong> correspondiente a
                    la ubicación consultada.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Historial de búsquedas</h3>

                <p>
                    Las últimas <strong>5 ubicaciones</strong> se almacenan
                    mediante cookies y pueden volver a consultarse.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Día y noche</h3>

                <p>
                    La interfaz adapta su apariencia según si en la ubicación
                    consultada es <strong>de día o de noche</strong>.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Gestión de errores</h3>

                <p>
                    La aplicación muestra <strong>mensajes informativos</strong>
                    cuando la ubicación no existe o se produce un problema
                    durante la consulta.
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

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> gestiona la lógica de la aplicación,
                    realiza las peticiones mediante <strong>cURL</strong> y
                    procesa las respuestas en formato <strong>JSON</strong>.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>Geolocalización</h3>

                <p>
                    <strong>Open-Meteo Geocoding API</strong> permite localizar
                    ciudades y obtener datos como <strong>nombre, país y
                    coordenadas</strong>.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>Datos meteorológicos</h3>

                <p>
                    <strong>WeatherAPI</strong> utiliza las coordenadas obtenidas
                    previamente para devolver la información meteorológica actual.
                </p>

            </article>

        </div>

    </section>


    <!-- FLUJO DE CONSULTA -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Flujo de consulta</h2>

            <p>
                Cómo se conectan las dos APIs para obtener el resultado final.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>01 · Buscar</h3>

                <p>
                    El usuario introduce una <strong>ciudad</strong> en el
                    buscador y solicita consultar el tiempo.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>02 · Localizar</h3>

                <p>
                    <strong>Open-Meteo</strong> busca la ubicación y devuelve
                    sus <strong>coordenadas</strong> para identificarla con precisión.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>03 · Consultar</h3>

                <p>
                    <strong>PHP y cURL</strong> utilizan esas coordenadas para
                    realizar una segunda petición a <strong>WeatherAPI</strong>.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>04 · Mostrar</h3>

                <p>
                    PHP procesa el <strong>JSON</strong> recibido y muestra
                    la información meteorológica en la interfaz.
                </p>

            </article>

        </div>

    </section>


    <!-- COOKIES Y JAVASCRIPT -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Cookies e interacción</h2>

            <p>
                Funcionalidades utilizadas para conservar las búsquedas y mejorar
                la interacción con la aplicación.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Historial con cookies</h3>

                <p>
                    Las últimas búsquedas se almacenan mediante una
                    <strong>cookie</strong> en formato JSON, manteniendo un
                    máximo de <strong>5 ubicaciones</strong> junto con sus
                    coordenadas.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>Interacciones con JavaScript</h3>

                <p>
                    JavaScript permite interactuar con las tarjetas del
                    historial para volver a consultar una ubicación almacenada.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>Modo día y noche</h3>

                <p>
                    WeatherAPI proporciona el valor que indica si la ubicación
                    se encuentra en <strong>día o noche</strong>. Este valor
                    permite adaptar la apariencia de la interfaz mediante CSS.
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

        <a href="<?= $proyecto["enlace"]; ?>" class="boton-proyecto">
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

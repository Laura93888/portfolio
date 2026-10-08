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

    <meta name="description" content="<?= htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8');?>">

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

        <div class="captura-principal">
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
                Principales aspectos técnicos desarrollados para integrar las APIs
                y procesar la información meteorológica.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Integración de APIs</h3>

                <p>
                    La aplicación combina dos servicios externos:
                    <strong>Open-Meteo Geocoding API</strong> para obtener las
                    coordenadas de la ubicación seleccionada y
                    <strong>WeatherAPI</strong> para consultar la información
                    meteorológica correspondiente.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Procesamiento de datos</h3>

                <p>
                    <strong>PHP</strong> realiza las peticiones mediante
                    <strong>cURL</strong>, procesa las respuestas en formato
                    <strong>JSON</strong> y transforma los datos recibidos para
                    adaptarlos a la información que necesita mostrar la aplicación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Interfaz dinámica</h3>

                <p>
                    <strong>JavaScript</strong> gestiona la interacción con el
                    usuario y actualiza la interfaz según los datos obtenidos,
                    permitiendo adaptar la información mostrada y la apariencia
                    de la aplicación a cada consulta.
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

    <!-- CÓMO FUNCIONA UNA CONSULTA -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Cómo funciona una consulta</h2>
            <p>Recorrido del proceso desde la búsqueda de la ciudad hasta la visualización del tiempo.</p>
        </div>

        <div class="proceso-timeline">

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">01 · Búsqueda</span>
                    <h3>Coincidencias de ubicación</h3>
                    <p>El usuario introduce el nombre de la ciudad y la API de geocodificación devuelve las posibles localidades encontradas.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">02 · Selección</span>
                    <h3>Elección de la ciudad</h3>
                    <p>De entre las opciones de la lista, el usuario selecciona la ubicación exacta para fijar las coordenadas deseadas.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">03 · Predicción</span>
                    <h3>Consulta meteorológica</h3>
                    <p>Con la ubicación ya definida, se ejecuta la segunda petición a WeatherAPI para recuperar los datos climáticos actuales.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">04 · Visualización</span>
                    <h3>Interfaz y cookies</h3>
                    <p>Se muestran los resultados adaptando el diseño (día/noche) y se almacena la consulta en el historial de las últimas búsquedas.</p>
                </div>
            </div>

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

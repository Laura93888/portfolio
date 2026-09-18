<?php

require_once 'data/proyectos.php';

$proyecto = $proyectos["desarrollo"][3];

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
            <?= $descripcion; ?>
        </p>

    </section>


    <!-- CAPTURA PRINCIPAL -->
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
            <strong>Weatherly</strong> es una aplicación web desarrollada con
            <strong>PHP</strong> que permite consultar el tiempo actual de
            cualquier ubicación mediante <strong>WeatherAPI</strong>.
        </p>

        <p>
            El usuario introduce una ciudad y la aplicación realiza una
            petición a la API para obtener información meteorológica actual,
            que posteriormente se procesa y se muestra de forma visual en
            la interfaz.
        </p>

        <p>
            Además de la información principal del tiempo, la aplicación
            permite consultar las últimas búsquedas realizadas y volver a
            utilizarlas directamente desde la interfaz.
        </p>

    </section>


    <!-- FUNCIONALIDADES -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Funcionalidades</h2>

            <p>
                Algunas de las principales funcionalidades desarrolladas en la aplicación.
            </p>
        </div>

        <div class="funcionalidades-proyecto">

            <article class="tarjeta-funcionalidad">
                <h3>Consulta meteorológica</h3>

                <p>
                    <strong>Búsqueda del tiempo por ciudad.</strong>
                    La aplicación obtiene los datos meteorológicos actuales
                    de la ubicación consultada.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Información del tiempo</h3>

                <p>
                    Muestra <strong>temperatura, sensación térmica, humedad,
                    viento, nubosidad y precipitación</strong>, entre otros datos.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Hora local</h3>

                <p>
                    La información obtenida incluye la <strong>hora local</strong>
                    correspondiente a la ubicación consultada.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Historial de búsquedas</h3>

                <p>
                    Las últimas <strong>5 ubicaciones consultadas</strong> se
                    almacenan mediante cookies y pueden volver a utilizarse
                    desde la interfaz.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Día y noche</h3>

                <p>
                    La interfaz cambia su apariencia según si en la ubicación
                    consultada es <strong>de día o de noche</strong>.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Gestión de errores</h3>

                <p>
                    La aplicación muestra <strong>mensajes informativos</strong>
                    cuando la ubicación no existe o se produce un problema
                    durante la conexión con la API.
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

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> se utiliza para gestionar la lógica
                    de la aplicación y realizar las peticiones a WeatherAPI.
                </p>

                <p>
                    La conexión con la API se realiza mediante
                    <strong>cURL</strong> y la respuesta se recibe en formato
                    <strong>JSON</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Frontend</h3>

                <p>
                    <strong>HTML5, CSS3 y JavaScript</strong> se utilizan para
                    construir la interfaz, mostrar la información y añadir
                    pequeñas interacciones.
                </p>

                <p>
                    También se utiliza <strong>Bootstrap</strong> para
                    determinados elementos de la interfaz y el diseño responsive.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>API y datos</h3>

                <p>
                    La aplicación consume <strong>WeatherAPI</strong> y procesa
                    los datos recibidos mediante <strong>JSON</strong>.
                </p>

                <p>
                    PHP convierte la respuesta JSON en un array para poder
                    utilizar sus diferentes valores en la interfaz.
                </p>

            </article>

        </div>

    </section>


    <!-- API Y FLUJO DE DATOS -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Consumo de la API</h2>

            <p>
                Recorrido de los datos desde la búsqueda del usuario hasta su
                representación en la interfaz.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>01 · Búsqueda</h3>

                <p>
                    El usuario introduce una <strong>ciudad o ubicación</strong>
                    en el buscador y solicita consultar el tiempo.
                </p>
            </article>


            <article class="bloque-tecnico">
                <h3>02 · Petición</h3>

                <p>
                    PHP construye la petición y utiliza <strong>cURL</strong>
                    para conectarse con WeatherAPI.
                </p>
            </article>


            <article class="bloque-tecnico">
                <h3>03 · JSON</h3>

                <p>
                    La API devuelve los datos en formato <strong>JSON</strong>,
                    que PHP procesa mediante <strong>json_decode()</strong>.
                </p>
            </article>


            <article class="bloque-tecnico">
                <h3>04 · Procesamiento</h3>

                <p>
                    La aplicación obtiene los datos necesarios, como
                    <strong>temperatura, humedad, viento o condiciones</strong>.
                </p>
            </article>


            <article class="bloque-tecnico">
                <h3>05 · Interfaz</h3>

                <p>
                    Los datos procesados se muestran en la interfaz mediante
                    los elementos HTML correspondientes.
                </p>
            </article>


            <article class="bloque-tecnico">
                <h3>06 · Resultado</h3>

                <p>
                    El usuario obtiene la información meteorológica de la
                    ubicación consultada de forma visual y adaptada al dispositivo.
                </p>
            </article>

        </div>

    </section>


    <!-- COOKIES Y JAVASCRIPT -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Cookies y JavaScript</h2>

            <p>
                Dos elementos utilizados para añadir funcionalidad e interacción
                a la aplicación.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Historial con cookies</h3>

                <p>
                    Las últimas búsquedas se almacenan mediante una
                    <strong>cookie</strong> en formato JSON.
                </p>

                <p>
                    El sistema mantiene un máximo de <strong>5 ubicaciones</strong>
                    y coloca la búsqueda más reciente en primera posición.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Interacciones con JavaScript</h3>

                <p>
                    JavaScript permite interactuar con las tarjetas del
                    historial y <strong>recuperar automáticamente la ciudad</strong>
                    almacenada.
                </p>

                <p>
                    También permite rellenar el buscador y lanzar una nueva
                    consulta desde la propia tarjeta.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Modo día y noche</h3>

                <p>
                    WeatherAPI proporciona información sobre si la ubicación
                    consultada se encuentra en <strong>día o noche</strong>.
                </p>

                <p>
                    Este valor se utiliza para aplicar una clase diferente al
                    <strong>body</strong> y modificar la apariencia mediante CSS.
                </p>

            </article>

        </div>

    </section>


    <!-- SEGURIDAD Y ERRORES -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Seguridad y gestión de errores</h2>

            <p>
                Aspectos aplicados para proteger las credenciales y gestionar
                posibles problemas durante las consultas.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Protección de la API Key</h3>

                <p>
                    La clave de WeatherAPI no se incluye directamente en el
                    código fuente.
                </p>

                <p>
                    Se almacena mediante una <strong>variable de entorno</strong>
                    y el archivo correspondiente se mantiene fuera del repositorio
                    mediante <strong>.gitignore</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Gestión de errores</h3>

                <ul>
                    <li>Ubicación no encontrada.</li>
                    <li>Error de conexión con la API.</li>
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


    <!-- GALERÍA -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Capturas del proyecto</h2>

            <p>
                Algunas vistas de la aplicación y de sus principales funcionalidades.
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
            Uno de los principales retos fue trabajar con una
            <strong>API externa</strong> y aprender a gestionar el recorrido
            completo de los datos desde la petición hasta su representación
            en la interfaz.
        </p>

        <p>
            Durante el desarrollo puse en práctica:
        </p>

        <ul>
            <li>
                <strong>Consumo de APIs:</strong> realización de peticiones
                mediante PHP y cURL.
            </li>

            <li>
                <strong>Trabajo con JSON:</strong> procesamiento de las
                respuestas obtenidas de la API.
            </li>

            <li>
                <strong>PHP:</strong> desarrollo de la lógica de la aplicación
                y gestión de los datos recibidos.
            </li>

            <li>
                <strong>JavaScript:</strong> manipulación básica del DOM
                e incorporación de interacciones.
            </li>

            <li>
                <strong>Cookies:</strong> almacenamiento y recuperación de
                las últimas búsquedas.
            </li>

            <li>
                <strong>Seguridad:</strong> uso de variables de entorno para
                evitar exponer la API Key.
            </li>

            <li>
                <strong>Responsive:</strong> adaptación de la interfaz a
                diferentes tamaños de pantalla.
            </li>
        </ul>

        <p>
            El proyecto me permitió comprender de forma práctica cómo
            <strong>una aplicación web puede comunicarse con un servicio
            externo</strong>, procesar la información recibida y transformarla
            en datos útiles para el usuario.
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
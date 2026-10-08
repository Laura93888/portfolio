<?php

require_once 'data/proyectos.php';

$proyecto = $proyectos["desarrollo"][0];

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

    <meta
        name="description"
        content="Body & Soul - Proyecto de desarrollo web de Laura Basurto."
    >

    <title>Body & Soul - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">


    <!-- CABECERA DEL PROYECTO -->

    <section class="proyecto-hero">

        <h1><?= $titulo; ?></h1>

        <p class="proyecto-introduccion">
            <?= $descripcionlarga; ?>
        </p>

    </section>


    <!-- CAPTURA PRINCIPAL -->

    <section class="proyecto-imagen-principal">

        <div class="galeria-proyecto captura-principal">

            <div>

                <img
                    src="/assets/img/bodyandsoul/pagppal.png"
                    alt="Página principal de Body & Soul"
                >

                <p>Página principal de la aplicación</p>

            </div>

            <div>

                <img
                    src="/assets/img/bodyandsoul/masreservadas.png"
                    alt="Página principal de Body & Soul"
                >

                <p>Página principal de la aplicación | Más reservadas</p>

            </div>
        </div>

    </section>




    <!-- FUNCIONALIDADES -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Funcionalidades</h2>

            <p>
                La aplicación integra las principales funcionalidades necesarias
                para gestionar el proceso completo de búsqueda y reserva.
            </p>

        </div>

        <div class="funcionalidades-proyecto">

            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/bodyandsoul/busqueda.png"
                    alt="Buscador y filtros de actividades de Body & Soul"
                >

                <h3>Búsqueda y filtros con mapa interactivo</h3>

                <p>
                    Buscador dinámico mediante criterios como
                    <strong>categoría, fecha y localización</strong> para
                    encontrar actividades según las preferencias del usuario.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/bodyandsoul/detalleact.png"
                    alt="Detalle de una actividad de Body & Soul"
                >

                <h3>Actividades</h3>

                <p>
                    Consulta de información, características y
                    <strong>disponibilidad</strong> de cada actividad antes
                    de realizar una reserva. 
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/bodyandsoul/actreservadas.png"
                    alt="Actividades reservadas por el usuario de Body & Soul"
                >

                <h3>Reservas</h3>

                <p>
                    El usuario puede
                    consultar las actividades que tiene reservadas filtrando por diferentes estados, cancelarlas o modificarlas.
                </p>

            </article>

            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/bodyandsoul/reseñas.png"
                    alt="Favoritos y reseñas"
                >

                <h3>Favoritos y reseñas</h3>

                <p>Las actividades pueden recibir <strong>reseñas y valoraciones</strong>
                de los usuarios que las han realizado.
                </p>

            </article>



        </div>

    </section>


    <!-- INTERFACES Y PERFILES -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Interfaces y perfiles</h2>

            <p>
                La aplicación cuenta con diferentes perfiles de usuario, cada uno con funcionalidades y permisos específicos. De esta forma, usuarios, empresas y administradores disponen de interfaces adaptadas a las acciones que pueden realizar dentro de la plataforma.
            </p>

        </div>


        <div class="galeria-proyecto">

            <div>

                <img
                    src="/assets/img/bodyandsoul/panelempresa.png"
                    alt="Panel de empresa de Body & Soul"
                >

                <p>
                    <strong>Panel de empresa.</strong>
                    Permite gestionar las actividades ofrecidas, consultar las reservas recibidas y administrar la información asociada a cada actividad.
                </p>

            </div>


            <div>

                <img
                    src="/assets/img/bodyandsoul/paneladmin.png"
                    alt="Panel de administración de Body & Soul"
                >

                <p>
                    <strong>Panel de administración.</strong>
                    Permite supervisar y gestionar los diferentes elementos de la plataforma, con acceso a funcionalidades reservadas al administrador.
                </p>

            </div>


            <div>

                <img
                    src="/assets/img/bodyandsoul/panelusuario.png"
                    alt="Panel de usuario de Body & Soul"
                >

                <p>
                    <strong>Panel de usuario.</strong>
                    Permite gestionar la cuenta personal, consultar y gestionar las actividades reservadas y acceder a los favoritos y las valoraciones realizadas.
                </p>

            </div>

            

        </div>

    </section>

    <!-- DESARROLLO -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Desarrollo</h2>

            <p>
                Tecnologías utilizadas para construir la interfaz, la lógica
                de negocio y la gestión de datos.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Aplicación dinámica</h3>

                <p>
                    <strong>HTML, CSS y JavaScript</strong> se utilizan para construir
                    la interfaz y gestionar la interacción con el usuario.
                </p>

                <p>
                    JavaScript se utiliza también para realizar
                    <strong>peticiones asíncronas mediante AJAX y Fetch</strong>,
                    permitiendo consultar y actualizar información sin recargar
                    completamente la página.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Lógica de reservas</h3>

                <p>
                    <strong>PHP</strong> gestiona la lógica de negocio de la aplicación
                    y procesa las operaciones relacionadas con las reservas.
                </p>

                <p>
                    El sistema comprueba la <strong>disponibilidad de las actividades</strong>
                    y las condiciones necesarias antes de realizar una operación,
                    conectando la interacción del usuario con la información
                    almacenada en la base de datos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Base de datos</h3>

                <p>
                    <strong>MySQL</strong> almacena la información de las principales
                    entidades de la aplicación, como <strong>usuarios, empresas,
                    actividades, categorías, reservas y reseñas</strong>.
                </p>

                <p>
                    La comunicación entre PHP y MySQL se realiza mediante
                    <strong>PDO y consultas preparadas</strong>, permitiendo consultar
                    y modificar los datos de forma estructurada y segura.
                </p>

            </article>

        </div>

    </section>


    <!-- ARQUITECTURA Y SEGURIDAD -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Arquitectura y seguridad</h2>

            <p>
                Organización de la aplicación y medidas utilizadas para
                controlar el acceso y proteger los datos.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Arquitectura</h3>

                <p>
                    La aplicación sigue una arquitectura
                    <strong>cliente-servidor</strong> separando la presentación,
                    la lógica de negocio y el acceso a los datos.
                </p>

                <ul>

                    <li>
                        <strong>Presentación:</strong> HTML, CSS y JavaScript.
                    </li>

                    <li>
                        <strong>Lógica de negocio:</strong> PHP.
                    </li>

                    <li>
                        <strong>Acceso a datos:</strong> MySQL mediante PDO.
                    </li>

                </ul>

            </article>


            <article class="bloque-tecnico">

                <h3>Autenticación y permisos</h3>

                <p>
                    La autenticación se gestiona mediante
                    <strong>sesiones PHP</strong>.
                </p>

                <p>
                    El sistema diferencia entre
                    <strong>usuarios, empresas y administradores</strong>
                    y comprueba el rol antes de permitir el acceso
                    a determinadas funcionalidades.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Protección de datos</h3>

                <ul>

                    <li>
                        Contraseñas protegidas mediante
                        <strong>password_hash()</strong>.
                    </li>

                    <li>
                        Comprobación mediante
                        <strong>password_verify()</strong>.
                    </li>

                    <li>
                        Consultas preparadas con <strong>PDO</strong>.
                    </li>

                    <li>
                        Validación de datos también en el
                        <strong>backend</strong>.
                    </li>

                    <li>
                        Control de sesión, rol y propiedad de los recursos.
                    </li>

                </ul>

            </article>

        </div>

    </section>


    <!-- FLUJO DE RESERVA -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Experiencia de reserva</h2>

            <p>
                Recorrido visual del usuario desde que descubre una actividad 
                hasta que gestiona su reserva de forma inmediata.
            </p>

        </div>

        <div class="proceso-timeline">

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">01 · Descubrimiento</span>
                    <h3>Búsqueda y filtrado interactivo</h3>
                    <p> El usuario explora el mapa o utiliza los filtros de categoría, fecha y ubicación para encontrar actividades que se ajusten a sus preferencias.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">02 · Exploración</span>
                    <h3>Consulta de detalles y disponibilidad</h3>
                    <p>Accede a la ficha completa de la actividad para revisar las características, ver la ubicación exacta y comprobar los horarios disponibles en tiempo real.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">03 · Confirmación</span>
                    <h3>Reserva rápida e instantánea</h3>
                    <p>C El usuario elige día y horario, solicita la reserva y el sistema comprueba la disponibilidad y las condiciones necesarias antes de registrar la operación.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">04 · Gestión personal</span>
                    <h3>Control desde el panel de usuario</h3>
                    <p>El usuario visualiza su nueva reserva en su perfil personal, pudiendo consultarla, cancelarla si lo necesita, o dejar una reseña una vez finalizada la actividad.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- ENLACES -->

    <section class="enlaces-proyecto">

        <a target="_blank" href="http://bodyandsoul.infinityfreeapp.com/publico/index.php" class="boton-proyecto">
            Ver página web
        </a>

        <a target="_blank" href="https://github.com/Laura93888/body-and-soul" class="boton-proyecto">
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
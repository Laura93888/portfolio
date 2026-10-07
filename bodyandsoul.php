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
                    consultar las actividades que tiene reservadas filtrando por diferentes estados, cancelarlas o modificarlas.</strong>. 
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
                    Permite gestionar la cuenta personal, consultar y gestionar las actividades reservada y acceder a los favoritos y las valoracions realizadas.
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

                <h3>Frontend</h3>

                <p>
                    <strong>HTML, CSS y JavaScript</strong> para construir
                    la interfaz y gestionar la interacción con el usuario.
                </p>

                <p>
                    JavaScript se utiliza también para realizar
                    <strong>peticiones asíncronas mediante AJAX y Fetch</strong>,
                    permitiendo actualizar información sin recargar
                    completamente la página.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> gestiona la lógica de negocio,
                    las sesiones, la validación de datos y el control
                    de permisos.
                </p>

                <p>
                    El proyecto utiliza
                    <strong>programación orientada a objetos</strong>
                    para estructurar diferentes partes de la lógica
                    de la aplicación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Base de datos</h3>

                <p>
                    <strong>MySQL</strong> almacena la información relacionada
                    con usuarios, empresas, actividades, categorías,
                    reservas y reseñas.
                </p>

                <p>
                    La comunicación entre PHP y MySQL se realiza mediante
                    <strong>PDO y consultas preparadas</strong>.
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

            <h2>Cómo funciona una reserva</h2>

            <p>
                Recorrido de una reserva desde la interacción del usuario
                hasta la respuesta de la aplicación.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>01 · Usuario</h3>

                <p>
                    Selecciona una actividad y solicita realizar una reserva
                    desde la interfaz.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>02 · Frontend</h3>

                <p>
                    JavaScript envía la información al servidor mediante una
                    <strong>petición HTTP o AJAX</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>03 · Backend</h3>

                <p>
                    PHP recibe la petición y comprueba
                    <strong>sesión, permisos, disponibilidad y reglas de negocio</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>04 · Base de datos</h3>

                <p>
                    PHP consulta o modifica la información almacenada en
                    <strong>MySQL mediante PDO</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>05 · Procesamiento</h3>

                <p>
                    El servidor procesa el resultado y determina si la operación
                    puede realizarse correctamente.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>06 · Respuesta</h3>

                <p>
                    El frontend recibe el resultado y actualiza la información
                    mostrada al usuario.
                </p>

            </article>

        </div>

    </section>


    <!-- ENLACES -->

    <section class="enlaces-proyecto">

        <a href="http://bodyandsoul.infinityfreeapp.com/publico/index.php" class="boton-proyecto">
            Ver página web
        </a>

        <a href="https://github.com/Laura93888/body-and-soul" class="boton-proyecto">
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
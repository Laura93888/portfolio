<?php

require_once 'data/proyectos.php';

$proyecto = $proyectos["desarrollo"][0];

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

    <meta name="description" content="Body & Soul - Proyecto de desarrollo web de Laura Basurto.">

    <title>Body & Soul - Laura Basurto</title>

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
            <strong>Body &amp; Soul</strong> es una plataforma web de búsqueda y
            reserva de actividades relacionadas con el <strong>deporte y el bienestar</strong>.
            La idea parte de un modelo similar al de las plataformas de reserva
            de servicios, pero especializado en actividades para el cuidado del cuerpo.
        </p>

        <p>
            El usuario puede buscar actividades utilizando diferentes criterios,
            como la categoría, la fecha o la localización, consultar su
            disponibilidad y realizar una reserva. La aplicación también incorpora
            un mapa interactivo para facilitar la localización de las actividades.
        </p>

        <p>
            La aplicación se divide en <strong>tres perfiles principales</strong>:
            usuarios, empresas y administradores, cada uno con sus propias
            funcionalidades y permisos.
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
                <h3>Usuarios</h3>

                <p>
                    <strong>Registro, autenticación y gestión de la cuenta.</strong>
                    El usuario puede consultar actividades y gestionar sus reservas.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Empresas</h3>

                <p>
                    <strong>Gestión de servicios y actividades.</strong>
                    Las empresas pueden administrar los servicios que ofrecen y
                    gestionar las reservas recibidas.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Reservas</h3>

                <p>
                    <strong>Consulta de disponibilidad y gestión de reservas.</strong>
                    El sistema controla plazas disponibles, reservas duplicadas
                    y determinadas modificaciones o cancelaciones.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Búsqueda y filtros</h3>

                <p>
                    <strong>Buscador dinámico</strong> mediante diferentes
                    criterios como categoría, fecha y localización.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Favoritos y reseñas</h3>

                <p>
                    Los usuarios pueden <strong>guardar actividades</strong> de
                    interés y compartir su experiencia mediante valoraciones y reseñas.
                </p>
            </article>


            <article class="tarjeta-funcionalidad">
                <h3>Mapa interactivo</h3>

                <p>
                    Integración de un <strong>mapa para localizar actividades</strong>
                    y facilitar la búsqueda según la ubicación.
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
                    <strong>HTML, CSS y JavaScript</strong> para construir la
                    interfaz y gestionar la interacción con el usuario.
                </p>

                <p>
                    JavaScript se utiliza también para realizar
                    <strong>peticiones asíncronas mediante AJAX y Fetch</strong>,
                    permitiendo actualizar información sin recargar completamente
                    la página.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> se encarga de la lógica de la aplicación,
                    la gestión de sesiones, la validación de datos y el control
                    de permisos.
                </p>

                <p>
                    El proyecto utiliza <strong>programación orientada a objetos</strong>
                    para organizar diferentes partes de la lógica de la aplicación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Base de datos</h3>

                <p>
                    <strong>MySQL</strong> almacena la información relacionada
                    con usuarios, empresas, servicios, categorías, reservas y reseñas.
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
                Organización interna de la aplicación y medidas aplicadas para
                proteger los datos y controlar el acceso.
            </p>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Arquitectura en capas</h3>

                <p>
                    La aplicación sigue una arquitectura
                    <strong>cliente-servidor</strong> organizada en tres capas:
                </p>

                <ul>
                    <li><strong>Presentación:</strong> HTML, CSS y JavaScript.</li>
                    <li><strong>Lógica de negocio:</strong> PHP.</li>
                    <li><strong>Acceso a datos:</strong> MySQL mediante PDO.</li>
                </ul>

            </article>


            <article class="bloque-tecnico">

                <h3>Autenticación y permisos</h3>

                <p>
                    La autenticación se gestiona mediante
                    <strong>sesiones PHP</strong>.
                </p>

                <p>
                    El sistema diferencia entre <strong>usuarios, empresas y
                    administradores</strong> y comprueba el rol antes de permitir
                    el acceso a determinadas funcionalidades.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Protección de datos</h3>

                <ul>
                    <li>Contraseñas protegidas mediante <strong>password_hash()</strong>.</li>
                    <li>Comprobación mediante <strong>password_verify()</strong>.</li>
                    <li>Consultas preparadas con <strong>PDO</strong>.</li>
                    <li>Validación de datos también en el <strong>backend</strong>.</li>
                    <li>Control de sesión, rol y propiedad de los recursos.</li>
                </ul>

            </article>

        </div>

    </section>


    <!-- FLUJO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Cómo funciona una reserva</h2>

            <p>
                Ejemplo del recorrido de una acción desde la interfaz hasta la base de datos.
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
            Uno de los principales retos fue <strong>conectar las diferentes
            partes de la aplicación</strong>: interfaz, lógica del servidor
            y base de datos.
        </p>

        <p>
            Durante el desarrollo puse en práctica:
        </p>

        <ul>
            <li>
                <strong>Desarrollo frontend:</strong> creación de interfaces
                y elementos dinámicos con HTML, CSS y JavaScript.
            </li>

            <li>
                <strong>Comunicación frontend-backend:</strong> uso de AJAX
                y Fetch para realizar peticiones asíncronas.
            </li>

            <li>
                <strong>Programación backend:</strong> desarrollo de lógica
                de negocio y gestión de sesiones con PHP.
            </li>

            <li>
                <strong>Base de datos:</strong> diseño y gestión de información
                relacionada mediante MySQL y PDO.
            </li>

            <li>
                <strong>Seguridad:</strong> autenticación, control de roles,
                validación en backend, contraseñas protegidas y consultas preparadas.
            </li>

            <li>
                <strong>Lógica de negocio:</strong> control de disponibilidad,
                reservas duplicadas y restricciones sobre determinadas operaciones.
            </li>
        </ul>

        <p>
            El proyecto me permitió integrar estos conocimientos en una
            <strong>aplicación web completa</strong>, pasando de la definición
            de los requisitos a la implementación de las diferentes
            funcionalidades y perfiles de usuario.
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
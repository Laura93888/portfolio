<?php

require_once 'data/proyectos.php';

$proyecto = null;

$proyecto = $proyectos["desarrollo"][2];

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

    <meta name="description" content="Bookify - Proyecto de desarrollo web de Laura Basurto.">

    <title>Bookify - Laura Basurto</title>

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
            <strong>Bookify</strong> es una aplicación web de gestión de una
            biblioteca digital. El proyecto permite consultar un catálogo de
            libros, acceder a su información y gestionar préstamos desde
            diferentes perfiles de usuario.
        </p>

        <p>
            La aplicación está conectada a una <strong>base de datos
            relacional MariaDB</strong>, donde se almacena la información
            relacionada con libros, autores, categorías, usuarios y préstamos.
        </p>

        <p>
            El sistema diferencia entre <strong>usuarios y administradores</strong>,
            de manera que cada perfil dispone de diferentes funcionalidades
            y permisos.
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

                <h3>Catálogo</h3>

                <p>
                    Consulta de los <strong>libros disponibles</strong> y
                    acceso a la información asociada a cada uno.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Búsqueda y categorías</h3>

                <p>
                    Organización de los libros mediante
                    <strong>categorías y diferentes criterios de búsqueda</strong>
                    para facilitar la consulta del catálogo.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Usuarios</h3>

                <p>
                    <strong>Registro, inicio de sesión y gestión de la cuenta</strong>
                    mediante sesiones PHP.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Préstamos</h3>

                <p>
                    Gestión de préstamos asociados a cada usuario, incluyendo
                    <strong>fechas y estado del préstamo</strong>.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Disponibilidad</h3>

                <p>
                    El sistema comprueba la <strong>disponibilidad del libro</strong>
                    antes de registrar un nuevo préstamo.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Administración</h3>

                <p>
                    El perfil administrador permite consultar y gestionar los
                    <strong>préstamos activos</strong> y registrar las devoluciones.
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
                    <strong>HTML, CSS y JavaScript</strong> se utilizan para
                    construir la interfaz y añadir diferentes interacciones
                    a la aplicación.
                </p>

                <p>
                    La interfaz se adapta a diferentes tamaños de pantalla
                    mediante un <strong>diseño responsive</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> se utiliza para desarrollar la lógica
                    de la aplicación, gestionar sesiones y procesar las
                    operaciones relacionadas con usuarios y préstamos.
                </p>

                <p>
                    La lógica se organiza mediante
                    <strong>funciones PHP reutilizables</strong> para separar
                    diferentes operaciones de la aplicación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Base de datos</h3>

                <p>
                    <strong>MariaDB</strong> almacena la información de la
                    biblioteca mediante diferentes tablas relacionadas:
                    usuarios, autores, categorías, libros y préstamos.
                </p>

                <p>
                    La comunicación entre PHP y la base de datos se realiza
                    mediante <strong>PDO y consultas preparadas</strong>.
                </p>

            </article>

        </div>

    </section>


    <!-- AUTENTICACIÓN Y SEGURIDAD -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Autenticación y seguridad</h2>

            <p>
                Control de acceso y protección de los datos utilizados por la aplicación.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Sesiones y roles</h3>

                <p>
                    La aplicación utiliza <strong>sesiones PHP</strong> para
                    mantener la identificación del usuario durante la navegación.
                </p>

                <p>
                    El sistema comprueba el <strong>rol del usuario</strong>
                    antes de permitir el acceso a determinadas funcionalidades,
                    especialmente al panel de administración.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Contraseñas</h3>

                <p>
                    Las contraseñas se almacenan utilizando
                    <strong>password_hash()</strong> y se comprueban mediante
                    <strong>password_verify()</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Consultas seguras</h3>

                <p>
                    Las operaciones con la base de datos utilizan
                    <strong>PDO y consultas preparadas</strong> para trabajar
                    con los datos introducidos por el usuario de forma más segura.
                </p>

            </article>

        </div>

    </section>


    <!-- FLUJO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Cómo funciona un préstamo</h2>

            <p>
                Ejemplo del recorrido de una operación desde la interfaz hasta la base de datos.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>01 · Usuario</h3>

                <p>
                    El usuario accede al catálogo y selecciona el
                    <strong>libro que quiere solicitar</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>02 · Sesión</h3>

                <p>
                    PHP comprueba que el usuario esté
                    <strong>identificado mediante su sesión</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>03 · Disponibilidad</h3>

                <p>
                    El sistema comprueba si el libro está disponible y
                    si no existe un préstamo activo incompatible.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>04 · Base de datos</h3>

                <p>
                    PHP realiza la operación correspondiente sobre
                    <strong>MariaDB mediante PDO</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>05 · Registro</h3>

                <p>
                    Se registra el préstamo asociado al usuario y al libro,
                    junto con sus <strong>fechas y estado</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>06 · Resultado</h3>

                <p>
                    La aplicación actualiza la información mostrada y permite
                    consultar el estado del préstamo.
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
            <strong>base de datos relacional</strong> y conectar la información
            almacenada con las diferentes funcionalidades de la aplicación.
        </p>

        <p>
            Durante el desarrollo puse en práctica:
        </p>

        <ul>

            <li>
                <strong>PHP:</strong> desarrollo de la lógica de la aplicación
                y creación de funciones para trabajar con los datos.
            </li>

            <li>
                <strong>MariaDB:</strong> diseño y gestión de una base de datos
                relacional para almacenar la información de la biblioteca.
            </li>

            <li>
                <strong>SQL y PDO:</strong> realización de consultas y
                comunicación entre PHP y la base de datos.
            </li>

            <li>
                <strong>Sesiones:</strong> identificación de usuarios y
                mantenimiento de la sesión durante la navegación.
            </li>

            <li>
                <strong>Roles:</strong> diferenciación entre usuarios y
                administradores y control de acceso.
            </li>

            <li>
                <strong>Lógica de negocio:</strong> control de disponibilidad,
                préstamos activos, devoluciones y estados.
            </li>

            <li>
                <strong>Seguridad:</strong> protección de contraseñas,
                consultas preparadas y comprobación de permisos en el backend.
            </li>

        </ul>

        <p>
            El proyecto me permitió trabajar de forma práctica la conexión
            entre <strong>frontend, backend y base de datos</strong>, desarrollando
            una aplicación en la que las acciones realizadas por el usuario
            modifican y consultan información almacenada en MariaDB.
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
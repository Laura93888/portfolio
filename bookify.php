<?php

require_once 'data/proyectos.php';

$proyecto = null;

$proyecto = $proyectos["desarrollo"][2];

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
            <?= $descripcionlarga; ?>
        </p>

    </section>


    <!-- CAPTURA PRINCIPAL -->
    <section class="proyecto-imagen-principal">
        <div class="galeria-proyecto captura-principal">

        <div>

            <img
                src="/assets/img/biblioteca/portada1.png"
                alt="Página de inicio de Bookify"
            >

            <p>Página de inicio de la aplicación</p>
        </br>
            <img
                src="/assets/img/biblioteca/portada2.png"
                alt="Página de inicio de Bookify"
            >

            <p>Página de inicio de la aplicación | Categorias</p>

        </div>

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
                    Se almacena la información de la
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
                    PHP realiza la consulta correspondiente sobre
                    <strong>la base de datos mediante PDO</strong>.
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

    <!-- ENLACES -->
    <section class="enlaces-proyecto">

        <a href="https://bookify.infinityfreeapp.com/" class="boton-proyecto">
            Ver página web
        </a>

        <a href="https://github.com/Laura93888/Biblioteca-Digital" class="boton-proyecto">
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
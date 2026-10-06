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

            <p style="margin-bottom:25px;">Página de inicio de la aplicación</p>
        
            <img
                src="/assets/img/biblioteca/portada2.png"
                alt="Página de inicio de Bookify"
            >

            <p>Página de inicio de la aplicación | Categorias</p>

        </div>
            </div>

    </section>

            <div class="cabecera-seccion">

                <h2>Funcionalidades</h2>

                <p>
                    La aplicación integra las principales funcionalidades necesarias
                    para consultar el catálogo y gestionar los préstamos.
                </p>

            </div>

    <!-- FUNCIONALIDADES -->
    <section class="seccion-proyecto">

        <div class="funcionalidades-proyecto">
            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/biblioteca/registro.png"
                    alt="Registro de usuarios de Bookify"
                >

                <h3>Registro</h3>

                <p>
                    Los nuevos usuarios pueden crear una cuenta mediante un
                    formulario de <strong>registro</strong> para acceder a las
                    funcionalidades de la aplicación.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/biblioteca/iniciosesion.png"
                    alt="Inicio de sesión de Bookify"
                >

                <h3>Inicio de sesión</h3>

                <p>
                    El sistema permite a los usuarios identificarse mediante
                    <strong>inicio de sesión</strong> y mantener su cuenta
                    activa durante la navegación.
                </p>

            </article>

            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/biblioteca/catalogo.png"
                    alt="Catálogo de libros de Bookify"
                >

                <h3>Catálogo</h3>

                <p>
                    Consulta de los <strong>libros disponibles</strong> y acceso
                    a la información asociada a cada uno mediante un catálogo
                    organizado por categorías.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/biblioteca/detallelibro.png"
                    alt="Detalle de un libro de Bookify"
                >

                <h3>Consulta y disponibilidad</h3>

                <p>
                    Cada libro dispone de una página de detalle donde se puede
                    consultar su información y comprobar su
                    <strong>disponibilidad para realizar un préstamo</strong>.
                </p>

            </article>       


            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/biblioteca/confirmacionreserva.png"
                    alt="Confirmación de préstamo de Bookify"
                >

                <h3>Préstamos</h3>

                <p>
                    Una vez seleccionado un libro disponible, el usuario puede
                    solicitar el préstamo y recibir una
                    <strong>confirmación de la operación</strong>.
                </p>

            </article>

        </div>

    </section>

            <!-- INTERFACES Y PERFILES --> <section class="seccion-proyecto"> <div class="cabecera-seccion"> <h2>Interfaces y perfiles</h2> <p> La aplicación adapta las funcionalidades y permisos disponibles según el perfil del usuario. </p> </div> <div class="galeria-proyecto"> <div> <img src="/assets/img/biblioteca/paneladmin.png" alt="Panel de administración de Bookify" > <p> <strong>Panel de administración.</strong> Permite consultar los préstamos activos y gestionar las devoluciones de los libros. </p> </div> <div> <img src="/assets/img/biblioteca/perfil.png" alt="Perfil de usuario de Bookify" > <p> <strong>Perfil de usuario.</strong> Permite consultar la información de la cuenta y gestionar los préstamos realizados. </p> </div> </div> </section>

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
                    <strong>identificado mediante su sesión</strong>. Si no lo está no le dejará reservar redigiéndole directamente a la página de inicio de sesión. 
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>03 · Disponibilidad</h3>

                <p>
                    El sistema comprueba si el libro está disponible, es decir, si no existe un préstamo activo.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>04 · Préstamo</h3>

                <p>
                    Se registra el préstamo asociado al usuario y al libro,
                    junto con sus <strong>fechas y estado</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>05 · Resultado</h3>

                <p>
                    La aplicación actualiza la información mostrada y permite
                    consultar el estado del préstamo tanto en el perfil del usuario como en el del administrador. 
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>06 · Devoluciones</h3>

                <p>
                    Cuando el usuario devuelva físicamente el libro, el administrador podrá marcarlo como devuelto, permitiendo así que se vuelva a poder prestar. Quedará registrado si se ha devuelto con retraso para posibles penalizaciones. 
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
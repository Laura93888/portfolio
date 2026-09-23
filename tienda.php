<?php

require_once 'data/proyectos.php';

$proyecto = null;

$proyecto = $proyectos["desarrollo"][1];

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

    <meta name="description" content="Tienda online - Proyecto de desarrollo web de Laura Basurto.">

    <title><?= $titulo; ?> - Laura Basurto</title>

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
            Este proyecto consiste en una <strong>tienda online</strong>
            desarrollada con PHP y conectada a una base de datos
            <strong>MariaDB</strong>.
        </p>

        <p>
            La aplicación permite consultar un catálogo de productos
            organizados por categorías y gestionar los productos seleccionados
            mediante un <strong>carrito de compra</strong>.
        </p>

        <p>
            El proyecto fue desarrollado como práctica de desarrollo web,
            trabajando la conexión entre <strong>PHP, MariaDB y la interfaz
            web</strong>.
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
                    Consulta de los <strong>productos disponibles</strong>
                    almacenados en la base de datos.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Categorías</h3>

                <p>
                    Organización de los productos mediante
                    <strong>categorías</strong> almacenadas en MariaDB.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Productos</h3>

                <p>
                    Consulta de la información de cada producto obtenida
                    directamente desde la <strong>base de datos</strong>.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Carrito</h3>

                <p>
                    Gestión de los productos seleccionados mediante un
                    <strong>carrito de compra</strong>.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Sesiones</h3>

                <p>
                    Uso de <strong>sesiones PHP</strong> para mantener
                    información del usuario y del carrito durante la navegación.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <h3>Base de datos</h3>

                <p>
                    Conexión con <strong>MariaDB</strong> para consultar y
                    gestionar la información almacenada.
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
                    construir la interfaz de la tienda y gestionar la
                    interacción con el usuario.
                </p>

                <p>
                    La interfaz presenta el catálogo y permite interactuar
                    con los productos y el carrito.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Backend</h3>

                <p>
                    <strong>PHP</strong> se utiliza para desarrollar la lógica
                    de la aplicación y gestionar las diferentes operaciones
                    de la tienda.
                </p>

                <p>
                    La lógica se organiza mediante
                    <strong>funciones PHP</strong> reutilizables y se separa
                    de la conexión con la base de datos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Base de datos</h3>

                <p>
                    <strong>MariaDB</strong> almacena la información de los
                    productos y categorías mediante tablas relacionadas.
                </p>

                <p>
                    La comunicación entre PHP y MariaDB se realiza mediante
                    <strong>PDO y consultas preparadas</strong>.
                </p>

            </article>

        </div>

    </section>


    <!-- CARRITO Y SESIONES -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Carrito y gestión de sesión</h2>

            <p>
                Gestión de los productos seleccionados durante la navegación.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Productos seleccionados</h3>

                <p>
                    El usuario puede añadir productos al
                    <strong>carrito de compra</strong> y consultar los elementos
                    que ha seleccionado.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Sesión PHP</h3>

                <p>
                    La aplicación utiliza <strong>sesiones</strong> para
                    mantener información durante la navegación y gestionar
                    el estado del carrito.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Gestión del carrito</h3>

                <p>
                    Las operaciones del carrito permiten añadir productos,
                    consultar los elementos seleccionados y modificar su contenido.
                </p>

            </article>

        </div>

    </section>


    <!-- FLUJO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Cómo funciona el carrito</h2>

            <p>
                Ejemplo del recorrido de una acción desde la selección del producto
                hasta la actualización del carrito.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>01 · Catálogo</h3>

                <p>
                    El usuario consulta los productos disponibles y selecciona
                    el producto que quiere añadir.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>02 · Producto</h3>

                <p>
                    PHP identifica el producto seleccionado y obtiene la
                    información necesaria.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>03 · Carrito</h3>

                <p>
                    El producto se incorpora al
                    <strong>carrito asociado a la sesión</strong>.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>04 · Gestión</h3>

                <p>
                    El usuario puede consultar y modificar los productos
                    que forman parte del carrito.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>05 · PHP</h3>

                <p>
                    PHP procesa las acciones realizadas sobre el carrito y
                    mantiene su información durante la navegación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>06 · Resultado</h3>

                <p>
                    La interfaz muestra el contenido actualizado del carrito
                    al usuario.
                </p>

            </article>

        </div>

    </section>


    <!-- SEGURIDAD -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>Seguridad</h2>

            <p>
                Prácticas utilizadas para trabajar de forma segura con los datos.
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Consultas preparadas</h3>

                <p>
                    Las consultas a la base de datos utilizan
                    <strong>PDO y consultas preparadas</strong> para evitar
                    incorporar directamente los datos recibidos en las consultas SQL.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Validación</h3>

                <p>
                    Los datos recibidos por la aplicación se comprueban antes
                    de utilizarlos en las diferentes operaciones.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Sesiones</h3>

                <p>
                    La información asociada a la navegación se gestiona
                    mediante <strong>sesiones PHP</strong>.
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
            Uno de los principales retos fue conectar la
            <strong>interfaz de la tienda con la base de datos</strong> y
            conseguir que las acciones realizadas por el usuario se
            reflejaran correctamente en la aplicación.
        </p>

        <p>
            Durante el desarrollo puse en práctica:
        </p>

        <ul>

            <li>
                <strong>PHP:</strong> desarrollo de la lógica de la aplicación
                y creación de funciones reutilizables.
            </li>

            <li>
                <strong>MariaDB:</strong> trabajo con una base de datos
                relacional para almacenar productos y categorías.
            </li>

            <li>
                <strong>SQL y PDO:</strong> realización de consultas y
                comunicación entre PHP y MariaDB.
            </li>

            <li>
                <strong>Sesiones:</strong> mantenimiento del estado del
                usuario y gestión del carrito.
            </li>

            <li>
                <strong>Carrito de compra:</strong> incorporación, consulta
                y gestión de productos seleccionados.
            </li>

            <li>
                <strong>Seguridad:</strong> utilización de consultas preparadas
                y validación de datos.
            </li>

        </ul>

        <p>
            El proyecto me permitió trabajar de forma práctica la conexión
            entre <strong>frontend, backend y base de datos</strong>, aplicando
            PHP y MariaDB a una aplicación web con funcionalidades dinámicas.
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
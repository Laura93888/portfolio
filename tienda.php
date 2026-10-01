<?php

require_once 'data/proyectos.php';

foreach ($proyectos as $claveGrupo => $grupo) {
    foreach ($grupo as $elemento) {
        if (($elemento['enlace'] ?? null) === 'tienda.php') {
            $proyecto = $elemento;
            $clave = $claveGrupo;
            break 2;
        }
    }
}

if (!isset($proyecto, $clave)) {
    http_response_code(404);
    exit('Proyecto no encontrado.');
}

if (!isset($categorias[$clave]['nombre'])) {
    throw new RuntimeException('No se encontró el nombre de la categoría del proyecto.');
}

$titulo = $proyecto['titulo'];
$descripcion = $proyecto['descripcion'];
$descripcionlarga = $proyecto['descripcionlarga'];
$tecnologias = $proyecto['tecnologias'];
$categoria = $categorias[$clave]['nombre'];
$categoriaextra = $proyecto['categoriaextra'] ?? null;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="<?= htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8'); ?>"
    >

    <title><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?> - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">

    <!-- CABECERA DEL PROYECTO -->
    <section class="proyecto-hero">

        <span class="etiqueta-bloque">
            <?= htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8'); ?>
        </span>

        <?php if (!empty($categoriaextra)): ?>
            <span class="etiqueta-bloque">
                <?= htmlspecialchars($categoriaextra, ENT_QUOTES, 'UTF-8'); ?>
            </span>
        <?php endif; ?>

        <h1><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?></h1>

        <p class="proyecto-introduccion">
            <?= htmlspecialchars($descripcionlarga, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <div class="tecnologias-proyecto">
            <?php foreach ($tecnologias as $tecnologia): ?>
                <span><?= htmlspecialchars($tecnologia, ENT_QUOTES, 'UTF-8'); ?></span>
            <?php endforeach; ?>
        </div>

    </section>


    <!-- CAPTURA PRINCIPAL -->
    <section class="proyecto-imagen-principal">

        <div class="galeria-proyecto captura-principal">

            <div>
                <img
                    src="/assets/img/tienda/principal.png"
                    alt="Página principal de la tienda online"
                >

                <p>Página principal de la tienda online.</p>
            </div>

        </div>

    </section>


    <!-- SOBRE EL PROYECTO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Sobre el proyecto</h2>
        </div>

        <p>
            <strong>Tienda online</strong> desarrollada con PHP y MySQL.
            Incluye un catálogo de productos organizado por categorías y un
            carrito de compra.
        </p>

        <p>
            Los pedidos se automatizan con <strong>n8n</strong>, que envía el
            email de confirmación y registra el pedido para su preparación
            en almacén.
        </p>

    </section>


    <!-- FUNCIONALIDADES -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Funcionalidades</h2>
        </div>

        <div class="funcionalidades-proyecto">

            <article class="tarjeta-funcionalidad">
                <h3>Catálogo y categorías</h3>
                <p>
                    Consulta de los productos organizados por categorías.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Carrito y sesión</h3>
                <p>
                    Permite añadir productos y gestionar el contenido del
                    carrito durante la navegación.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Pedidos automatizados con n8n</h3>
                <p>
                    n8n envía el email de confirmación y registra el pedido
                    para el almacén.
                </p>
            </article>

        </div>

    </section>


    <!-- CAPTURAS DEL PROYECTO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Capturas del proyecto</h2>
        </div>

        <div class="galeria-proyecto">

            <div>
                <img
                    src="/assets/img/tienda/catalogo.png"
                    alt="Catálogo de productos de la tienda organizado por categorías"
                >
                <p>Catálogo de productos organizado por categorías.</p>
            </div>

            <div>
                <img
                    src="/assets/img/tienda/carrito.png"
                    alt="Carrito de compra con los productos seleccionados"
                >
                <p>Carrito de compra con los productos seleccionados.</p>
            </div>

            <div>
                <img
                    src="/assets/img/tienda/email-pedido.png"
                    alt="Email de confirmación enviado tras realizar un pedido"
                >
                <p>Email de confirmación del pedido enviado al cliente.</p>
            </div>

            <div>
                <img
                    src="/assets/img/tienda/almacen.png"
                    alt="Hoja de almacén con los pedidos registrados"
                >
                <p>Registro de pedidos para su preparación en almacén.</p>
            </div>

            <div>
                <img
                    src="/assets/img/tienda/n8n-flujo.png"
                    alt="Flujo de n8n para procesar el pedido"
                >
                <p>
                    Flujo de n8n que envía la confirmación y registra el pedido
                    para almacén.
                </p>
            </div>

        </div>

    </section>


    <!-- DESARROLLO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Desarrollo</h2>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>Frontend</h3>
                <p>
                    HTML, CSS y JavaScript para construir la interfaz y
                    gestionar la interacción con la tienda.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Backend</h3>
                <p>
                    PHP gestiona la lógica de la tienda, el carrito y el
                    procesamiento de los pedidos.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Base de datos</h3>
                <p>
                    MySQL se conecta con PHP mediante PDO y consultas
                    preparadas.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Automatización</h3>
                <p>
                    n8n envía el email de confirmación y registra el pedido
                    para el almacén.
                </p>
            </article>

        </div>

    </section>


    <!-- ARQUITECTURA Y SEGURIDAD -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Arquitectura y seguridad</h2>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>Arquitectura</h3>
                <ul>
                    <li><strong>Presentación:</strong> HTML, CSS y JavaScript.</li>
                    <li><strong>Lógica:</strong> PHP.</li>
                    <li><strong>Datos:</strong> MySQL con PDO.</li>
                    <li>Consultas preparadas para acceder a los datos.</li>
                    <li>Validación de datos antes de procesarlos.</li>
                    <li>Sesiones PHP para gestionar el estado del carrito.</li>
                </ul>
            </article>

        </div>

    </section>


    <!-- CÓMO FUNCIONA UN PEDIDO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Cómo funciona un pedido</h2>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>01 · Catálogo</h3>
                <p>El cliente consulta los productos y sus categorías.</p>
            </article>

            <article class="bloque-tecnico">
                <h3>02 · Carrito en sesión</h3>
                <p>El cliente añade al carrito los productos que quiere comprar.</p>
            </article>

            <article class="bloque-tecnico">
                <h3>03 · Pedido</h3>
                <p>El cliente confirma el pedido desde la tienda.</p>
            </article>

            <article class="bloque-tecnico">
                <h3>04 · n8n</h3>
                <p>n8n procesa la automatización del pedido.</p>
            </article>

            <article class="bloque-tecnico">
                <h3>05 · Confirmación y almacén</h3>
                <p>
                    Se envía el email de confirmación y se registra el pedido
                    para el almacén.
                </p>
            </article>

        </div>

    </section>


    <!-- ENLACES -->
    <section class="enlaces-proyecto">

        <a href="https://nuvia.infinityfreeapp.com" class="boton-proyecto">
            Ver página web
        </a>

        <a href="https://github.com/Laura93888/tienda" class="boton-proyecto">
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
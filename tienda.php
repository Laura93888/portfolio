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
                <h3>Carrito</h3>
                <p>
                    Permite añadir productos y gestionar el contenido del
                    carrito durante la navegación.
                </p>
            </article>

            <article class="tarjeta-funcionalidad">
                <h3>Pedidos automatizados con n8n</h3>
                <p>
                    Cada pedido realizado activa un flujo en n8n.
                </p>
            </article>

        </div>

    </section>

    <!-- CATÁLOGO Y CARRITO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Catálogo y carrito</h2>
            <p>Así ve la tienda el cliente.</p>
        </div>

        <div class="galeria-proyecto">

            <div>
                <img
                    src="/assets/img/tienda/catalogo.png"
                    alt="Catálogo de productos de la tienda organizado por categorías"
                >
                <p>
                    <strong>Catálogo.</strong>
                    Productos organizados por categorías.
                </p>
            </div>

            <div>
                <img
                    src="/assets/img/tienda/carrito.png"
                    alt="Carrito de compra con los productos seleccionados"
                >
                <p>
                    <strong>Carrito de compra.</strong>
                    Productos seleccionados durante la navegación.
                </p>
            </div>

        </div>

    </section>


    <!-- PEDIDOS Y AUTOMATIZACIÓN -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Pedidos y automatización</h2>
            <p>Lo que ocurre después de confirmar la compra.</p>
        </div>

        <div class="galeria-proyecto">

            <div>
                <img
                    src="/assets/img/tienda/email-pedido.png"
                    alt="Email de confirmación enviado tras realizar un pedido"
                >
                <p>
                    <strong>Email de confirmación.</strong>
                    El cliente lo recibe al hacer el pedido.
                </p>
            </div>

            <div>
                <img
                    src="/assets/img/tienda/almacen.png"
                    alt="Hoja de almacén con los pedidos registrados"
                >
                <p>
                    <strong>Hoja de almacén.</strong>
                    Cada pedido y sus productos quedan registrados.
                </p>
            </div>

            <div>
                <img
                    src="/assets/img/tienda/n8n-flujo.png"
                    alt="Flujo de n8n que procesa el pedido"
                >
                <p>
                    <strong>Flujo en n8n.</strong>
                    Recibe el pedido, lo registra y envía el email.
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
                    Flujo en n8n con webhook, Google Sheets y envío de email.
                </p>
            </article>

        </div>

    </section>


    <!-- SEGURIDAD -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Seguridad</h2>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>Acceso a datos</h3>
                <p>
                    Las consultas a la base de datos usan <strong>PDO con
                    consultas preparadas</strong>.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Validación</h3>
                <p>
                    Los datos que llegan a la aplicación se validan en el
                    servidor antes de procesarlos.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Acceso al pedido</h3>
                <p>
                    Solo un cliente identificado puede finalizar un pedido.
                </p>
            </article>

        </div>

    </section>


    <!-- CÓMO FUNCIONA UN PEDIDO --> <section class="seccion-proyecto"> <div class="cabecera-seccion"> <h2>Cómo funciona un pedido</h2> </div> <div class="bloques-tecnicos"> <article class="bloque-tecnico"> <h3>01 · Catálogo</h3> <p>El cliente puede navegar por las diferentes categorías de la tienda y consultar la información de los productos existentes. </p> </article> <article class="bloque-tecnico"> <h3>02 · Carrito</h3> <p>El cliente añade al carrito los productos que quiere comprar. Si navega como invitado, la información se conserva mediante cookies. Si ya está identificado se gestiona mediante la sesión de PHP. </p> </article> <article class="bloque-tecnico"> <h3>03 · Pedido</h3> <p>Para finalizarlo hay que iniciar sesión como cliente. En ese momento, el carrito de las cookies pasa a la sesión y no se pierde la selección. Aquí es donde se redirigiría a la pasarela de pago, que queda fuera del alcance del proyecto.</p> </article> <article class="bloque-tecnico"> <h3>04 · n8n</h3> <p>Al confirmar el pedido n8n guarda el pedido y cada uno de sus productos en Google Sheets, así el almacén puede prepararlo. También envia un email al cliente con los datos del pedido. </p> </article> </div> </section>


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
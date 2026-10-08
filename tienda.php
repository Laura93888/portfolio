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

        <h1><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?></h1>

        <p class="proyecto-introduccion">
            <?= htmlspecialchars($descripcionlarga, ENT_QUOTES, 'UTF-8'); ?>
        </p>

    </section>


    <!-- CAPTURA PRINCIPAL -->
    <section class="proyecto-imagen-principal">

        <div class="captura-principal">

            <div>
                <img
                    src="/assets/img/tienda/pantallappal.png"
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

            <p>
                Principales funcionalidades desarrolladas en la tienda online.
            </p>

        </div>

        <div class="funcionalidades-proyecto">

            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/tienda/categorias.png"
                    alt="Catálogo de productos de la tienda organizado por categorías"
                >

                <h3>Catálogo y categorías</h3>

                <p> El cliente puede consultar <strong>todos los productos</strong> o seleccionar una <strong>categoría</strong> desde el menú desplegable. También puede consultar los <strong>más vendidos</strong> desde la página principal. </p>

            </article>

            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/tienda/producto.png"
                    alt="Página de detalle de un producto de la tienda"
                >

                <h3>Detalle del producto</h3>

                <p>
                    Cada producto dispone de una página propia donde el cliente
                    puede consultar su <strong>información, precio y disponibilidad</strong>
                    antes de añadirlo al carrito.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/tienda/carrito.png"
                    alt="Carrito de compra con productos seleccionados"
                >

                <h3>Carrito de compra</h3>

                <p>
                    El cliente puede añadir productos y gestionar el contenido
                    del carrito durante la navegación. Para los usuarios
                    invitados, la selección se conserva mediante
                    <strong>cookies</strong>, mientras que los usuarios
                    identificados utilizan la <strong>sesión de PHP</strong>.
                </p>

            </article>


            <article class="tarjeta-funcionalidad">

                <img
                    src="/assets/img/tienda/confirmacioncorreo.png"
                    alt="Email de confirmación enviado tras realizar un pedido"
                >

                <h3>Pedidos automatizados</h3>

                <p>
                    Al confirmar un pedido, se activa un flujo de
                    <strong>n8n</strong> que registra la información en
                    <strong>Google Sheets</strong> y envía un
                    <strong>email de confirmación</strong> al cliente.
                </p>

            </article>

        </div>

    </section>


    <!-- DESARROLLO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Desarrollo</h2>
        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>Backend</h3>
                <p>
                    PHP gestiona usuarios, sesiones, carrito y pedidos. El carrito utiliza la base de datos para usuarios identificados y cookies para usuarios invitados.
                </p>
            </article>
            
            <article class="bloque-tecnico">
                <h3>Base de datos</h3>
                <p>
                    Se utiliza MySQL y una clase propia db para centralizar el acceso a los datos. Se gestionan productos, categorías, usuarios y carritos, además de las diferentes operaciones necesarias para la tienda.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>Automatización de pedidos</h3>
                <p>
                    PHP envía los datos del pedido mediante <strong>cURL</strong> a un <strong>webhook de n8n</strong>, que registra la información en Google Sheets y envía el email de confirmación al cliente.
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
    <!-- CÓMO FUNCIONA UN PEDIDO -->
    <section class="seccion-proyecto">

        <div class="cabecera-seccion">
            <h2>Cómo funciona un pedido</h2>
            <p>Recorrido del proceso desde la selección inicial hasta la automatización con n8n.</p>
        </div>

        <div class="proceso-timeline">

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">01 · Catálogo</span>
                    <h3>Navegación y categorías</h3>
                    <p>El cliente navega por las diferentes categorías de la tienda y consulta la información detallada de los productos disponibles.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">02 · Carrito</span>
                    <h3>Gestión de selección</h3>
                    <p>Los productos se añaden al carrito. Si navega como invitado se almacena mediante cookies; si está identificado, a través de la sesión de PHP.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">03 · Pedido</span>
                    <h3>Identificación y cierre</h3>
                    <p>Para finalizar la compra se requiere iniciar sesión (fusionando el carrito previo). Se contempla el diseño enfocado a una pasarela de pago.</p>
                </div>
            </div>

            <div class="paso-timeline">
                <div class="punto-timeline"></div>
                <div class="contenido-paso">
                    <span class="numero-paso">04 · n8n</span>
                    <h3>Automatización de datos</h3>
                    <p>Al confirmar, un flujo de n8n registra el pedido y sus artículos en Google Sheets para el control de stock y envía un email de confirmación al cliente.</p>
                </div>
            </div>

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
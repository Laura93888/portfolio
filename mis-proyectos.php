<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Laura Basurto, desarrolladora web Full Stack.">

    <title>Laura Basurto - Desarrolladora Web</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<?php require_once 'includes/header.php'; 
     
    // Cargamos los proyectos al principio para tenerlos disponibles en PHP
    require_once 'data/proyectos.php'; 
?>
    
<main>

    <section class="proyectos">

        <div class="cabecera-seccion">

            <h2>Proyectos</h2>

            <p>
                Selecciona un área para ver proyectos resumidos. Cada tarjeta
                enlaza a una página con capturas, tecnologías y más detalle.
            </p>

        </div>

       <div class="contenedor-proyectos">

           <aside class="menu-categorias">
               <?php $primero = true; ?>
               <?php foreach ($categorias as $clave => $cat): ?>
                   <?php if (empty($proyectos[$clave])) continue; ?>
                   <button class="tarjeta-categoria <?= $primero ? ' activa' : '' ?>" data-categoria="<?= $clave ?>">
                       <span class="icono-categoria"><?= $cat['icono'] ?></span>
                       <strong><?= htmlspecialchars($cat['nombre']) ?></strong>
                       <small><?= htmlspecialchars($cat['descripcion']) ?></small>
                   </button>
                <?php $primero = false; ?>
               <?php endforeach; ?>
           </aside>

        <div class="lista-proyectos">
            <!-- JavaScript generará aquí las tarjetas resumen -->
        </div>

        </div>

    </section>


</main>

<?php require_once 'includes/footer.php'; ?>

<script>
    const proyectos = <?= json_encode($proyectos, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>;

</script>

<script src="assets/js/script.js"></script>

</body>
</html>
<?php

require_once 'data/proyectos.php';

$proyecto = null;

foreach($proyectos["automatizaciones"] as $item){
    if ($item["titulo"] === "Agente IA para WhatsApp"){
        $proyecto = $item;
        break;
    }
}

$titulo = $proyecto["titulo"];
$descripcion = $proyecto["descripcion"];
$categoria = "Automatización e IA";
$descripcionlarga=$proyecto["descripcionlarga"];


?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
    content="<?= htmlspecialchars($proyecto['descripcion']); ?>">

    <title><?= $titulo; ?> - Laura Basurto</title>

    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="pagina-proyecto">


    <!-- =====================================================
         CABECERA
         ===================================================== -->

    <section class="proyecto-hero">

        <h1>
            <?=$titulo?>
        </h1>

        <p class="proyecto-introduccion">
           <?=$descripcionlarga?>
        </p>

        <div class="proyecto-imagen-principal">

            <a href="assets/img/agenteWhatsapp/resultadowhatsap.png" target="_blank">

                <img src="assets/img/agenteWhatsapp/resultadowhatsap.png"
                     alt="Posible resultado del flujo">

            </a>

        </div>

    </section>


    <!-- =====================================================
         EL PROBLEMA
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>El problema</h2>

        </div>

        <p>
            Muchos negocios necesitan escribir a una lista grande de contactos, contestar a los que responden, apuntar quién está interesado y volver a escribir a los que no contestan. Hecho a mano, depende de una persona y el seguimiento se pierde en cuanto la lista crece.
        </p>

        <p>
            Además, la persona que cierra la venta o la cita solo necesita que le lleguen contactos que ya han mostrado interés. Todo lo anterior es trabajo previo que se puede automatizar.
        </p>

    </section>


    <!-- =====================================================
         LA SOLUCIÓN
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>La solución</h2>

            <p>
                Un agente de IA escribe por WhatsApp a una lista de contactos, mantiene la conversación y deja todo registrado para que la persona que atiende solo tenga que ocuparse de los contactos que de verdad le interesan. 
            </p>
            <p>El sistema está compuesto por tres flujos en n8n conectados entre sí: envío de mensajes, conversación con el agente y reactivación de los que no responden. Estos comparten la información necesaria para gestionar los contactos
            </p>

        </div>
            
            <div class="proyecto-imagen-principal">

                <a href="assets/img/agenteWhatsapp/flujo_completo.png" target="_blank">

                    <img src="assets/img/agenteWhatsapp/flujo_completo.png"
                         alt="Flujo completo de la automatización del agente de WhatsApp">

                </a>

            </div>
        <div class="cabecera-seccion">
            <p>
La información de los contactos se organiza en tres registros según su estado y evolución:
            </p>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">
                <h3>1. Hoja de contactos</h3>
                <p>
                    Es la lista de teléfonos a los que escribir. Cuando alguien
                    responde, su estado se actualiza. Si no responde, sigue
                    pendiente y el sistema le vuelve a escribir más adelante.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>2. Hoja de interesados</h3>
                <p>
                    Aquí se guardan las personas que han mostrado interés pero no
                    han cerrado una llamada. El equipo puede revisarla y
                    contactarlas por su cuenta cuando quiera.
                </p>
            </article>

            <article class="bloque-tecnico">
                <h3>3. Calendario y hoja de agendados</h3>
                <p>
                    Cuando alguien acepta una llamada, el agente crea el evento en
                    el calendario del equipo y lo apunta también en una hoja de
                    agendados, para que quede todo registrado.
                </p>
            </article>

        </div>

    </section>


            <!-- =====================================================
                 PROCESO DE AUTOMATIZACIÓN
                 ===================================================== -->

            <section class="seccion-proyecto">

                <div class="cabecera-seccion">

                    <h2>Proceso de automatización</h2>

                    <p>
                        El proceso se divide en varias fases que abarcan el envío de mensajes, la gestión de respuestas y el seguimiento automático de los contactos.
                    </p>

                </div>


                <div class="bloques-tecnicos pasos-proceso">


                    <!-- FASE 1 -->

                    <article class="bloque-tecnico">

                        <h3>
                            Fase 1 · Envío de mensajes
                        </h3>

                        <p>
                            Cada día un trigger lee la <strong>hoja de contactos</strong>, coge un lote de 20 contactos pendientes y comprueba con <strong>Evolution API</strong> que el número tenga WhatsApp. Después, con la misma herramienta, envía el mensaje y actualiza el estado en la hoja para no escribir dos veces a la misma persona.
                        </p>

                        <div class="proyecto-imagen-principal">

                            <a href="assets/img/agenteWhatsapp/envio_proactivo_msjes.png"
                               target="_blank">

                                <img src="assets/img/agenteWhatsapp/envio_proactivo_msjes.png"
                                     alt="Flujo de envío proactivo">

                            </a>

                        </div>

                    </article>


                    <!-- FASE 2 -->

                    <article class="bloque-tecnico">

                        <h3>
                            Fase 2 · Recepción de respuestas
                        </h3>

                        <p>
                            Las respuestas llegan por webhook y se guardan unos segundos en <strong>Redis</strong>, de esta forma si alguien escribe varios mensajes seguidos, se juntan en uno para que el agente no conteste a
cada frase. 
                        </p>
                        <div class="proyecto-imagen-principal">

                        <a href="assets/img/agenteWhatsapp/buffer.png"
                           target="_blank">

                            <img src="assets/img/agenteWhatsapp/buffer.png"
                                 alt="Buffer de mensajes en Redis">

                        </a>
                            </div>
                        <p>
                            Si se reciben notas de voz, se descargan y transcriben automáticamente con <strong>Whisper</strong> antes de unificar todo el contenido por marcas temporales.
                        </p>

                        <div class="proyecto-imagen-principal">
                            <a href="assets/img/agenteWhatsapp/ordenacion_unificacion.png" target="_blank">
                                <img src="assets/img/agenteWhatsapp/ordenacion_unificacion.png" alt="Ordenación de los mensajes">
                            </a>
                        </div>

                    </article>


                    <!-- FASE 3 -->
                    <article class="bloque-tecnico">
                        <h3>
                            Fase 3 ·  El agente conversa y decide qué hacer
                        </h3>

                        <p>
                            El <strong>agente de IA</strong> recibe los mensajes ya unificados y tiene memoria en <strong>PostgreSQL</strong>, con una sesión por cada número de teléfono. Su estrategia comercial se rige por un prompt estructurado en fases. 
                        </p>

                        <div class="proyecto-imagen-principal">
                            <a href="assets/img/agenteWhatsapp/prompt_agente.png" target="_blank">
                                <img src="assets/img/agenteWhatsapp/prompt_agente.png" alt="Configuración del Agente IA y su prompt">
                            </a>
                        </div>

                        <p>
                            El modelo decide <strong>de forma autónoma</strong> cuándo utilizar herramientas externas y cuáles usar. No sigue una secuencia fija: según la evolución de la conversación, el agente selecciona dinámicamente la acción necesaria:
                        </p>

                        <ul style="margin: 15px 0 15px 20px; line-height: 1.6;">
                            <li><strong>Google Sheets · Agregar Interesados:</strong> guarda a quien muestra interés pero no cierra llamada. </li>
                            <li><strong>Google Sheets · Agregar Agendado:</strong> Guarda el registro de aquellos lead que hayan concertado llamada con la franja horaria acordada.</li>
                            <li><strong>Google Calendar · Consultar eventos:</strong> Comprueba la disponibilidad real de la agenda antes de proponer o confirmar una hora con el contacto.</li>
                            <li><strong>Google Calendar · Crear evento:</strong> Agenda la llamada cuando se acuerda fecha y hora.</li>
                        </ul>

                        <div class="proyecto-imagen-principal">
                            <a href="assets/img/agenteWhatsapp/opciones_autonomas_agente.png" target="_blank">
                                <img src="assets/img/agenteWhatsapp/opciones_autonomas_agente.png" alt="Herramientas autónomas disponibles para el agente de IA">
                            </a>
                        </div>
                    </article>

                    <!-- FASE 4 -->

                    <article class="bloque-tecnico">

                        <h3>
                            Fase 4 · Reactivación automática de los que no responden
                        </h3>

                        <p>
                            Mediante un trigger diario, el sistema revisa la hoja de contactos para detectar aquellos contactos que no respondieron al primer mensaje para volver a escribirles. Actualiza la hoja de contactos para que se marque como contactado y no se le escriba nunca más de 2 veces. 
                        </p>

                        <div class="proyecto-imagen-principal">

                            <a href="assets/img/agenteWhatsapp/reactivacion_automatica_mensaje.png"
                               target="_blank">

                                <img src="assets/img/agenteWhatsapp/reactivacion_automatica_mensaje.png"
                                     alt="Flujo de reactivación automática">

                            </a>

                        </div>

                    </article>

                </div>

            </section>


    <!-- =====================================================
         RESULTADO
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Resultado
            </h2>

        </div>

        <p>
            Un sistema que se encarga solo de todo el trabajo pesado: escribir los primeros mensajes, responder dudas y hacer el seguimiento a los que no contestan.
        </p>

        <p>
            El equipo solo tiene que entrar para dos cosas: ver las llamadas que se han agendado solas en el calendario y contactar con la gente que ha mostrado algún interés. 
        </p>

    </section>


    <!-- =====================================================
         TECNOLOGÍAS
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Tecnologías y herramientas utilizadas
            </h2>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    n8n
                </h3>

                <p>
                    Diseño y orquestación del workflow completo.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Evolution API
                </h3>

                <p>
                    Envío y recepción de mensajes de WhatsApp.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Redis
                </h3>

                <p>
                    Buffer temporal para agrupar mensajes entrantes.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    PostgreSQL
                </h3>

                <p>
                    Almacenamiento persistente de la memoria conversacional.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    OpenAI
                </h3>

                <p>
                    Modelo de lenguaje del agente y transcripción de audios
                    mediante Whisper.
                </p>

            </article>

            <article class="bloque-tecnico">

                <h3>
                    Google Sheets
                </h3>

                <p>
                     Contactos, interesados, llamadas agendadas y estados de contacto.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Calendar
                </h3>

                <p>
                    Consulta de disponibilidad y creación de eventos de
                    seguimiento.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    JavaScript
                </h3>

                <p>
                    Normalización y transformación de los datos recibidos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    HTTP Request
                </h3>

                <p>
                    Integración con APIs y servicios externos.
                </p>

            </article>

        </div>

    </section>


    <!-- =====================================================
         ENLACES
         ===================================================== -->

    <section class="enlaces-proyecto">

        <a href="index.php" class="enlace-proyecto">
            ← Volver al portfolio
        </a>

    </section>

</main>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>
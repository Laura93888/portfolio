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
tecnologias=$proyecto["tecnologias"];

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

    </section>


    <!-- =====================================================
         EL PROBLEMA
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>El problema</h2>

        </div>

        <p>
            La captación de propietarios puede implicar localizar contactos,
            realizar el primer acercamiento, responder a las conversaciones,
            gestionar los interesados y hacer seguimiento de aquellas
            personas que todavía no han tomado una decisión.
        </p>

        <p>
            Cuando estas tareas se realizan manualmente, el proceso depende
            continuamente de una persona y resulta difícil mantener un
            seguimiento constante cuando aumenta el número de contactos.
        </p>

        <p>
            El objetivo era crear un sistema capaz de gestionar
            automáticamente estas etapas, manteniendo el contexto de cada
            conversación y pudiendo realizar acciones sobre los datos y el
            calendario cuando fuese necesario.
        </p>

    </section>


    <!-- =====================================================
         LA SOLUCIÓN
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>La solución</h2>

            <p>
                El sistema combina tres circuitos dentro de un mismo entorno
                de automatización: contacto inicial, conversación con un
                agente de IA y seguimiento automático.
            </p>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>Envío proactivo</h3>

                <p>
                    El sistema consulta diariamente los leads disponibles,
                    comprueba si el número tiene WhatsApp activo y envía un
                    primer mensaje personalizado al propietario.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Conversación con IA</h3>

                <p>
                    Los mensajes entrantes se procesan mediante un agente de
                    IA con memoria conversacional, capaz de mantener el
                    contexto y utilizar herramientas externas según las
                    necesidades de cada conversación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>Reactivación automática</h3>

                <p>
                    Cuando una conversación no termina en una llamada, el
                    sistema puede programar un seguimiento y volver a
                    contactar automáticamente cuando corresponde.
                </p>

            </article>

        </div>

    </section>


    <!-- =====================================================
         ARQUITECTURA DE LA AUTOMATIZACIÓN
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Arquitectura de la automatización
            </h2>

            <p>
                El sistema está compuesto por tres flujos independientes pero
                conectados. Cada uno se encarga de una parte del proceso y
                comparte la información necesaria para continuar la gestión
                de los contactos.
            </p>

        </div>

        <div class="proyecto-imagen-principal">

            <a href="assets/img/agenteWhatsapp/flujo_completo.png" target="_blank">

                <img src="assets/img/agenteWhatsapp/flujo_completo.png"
                     alt="Flujo completo de la automatización del agente de WhatsApp">

            </a>

        </div>

    </section>

            <!-- =====================================================
                 PROCESO DE AUTOMATIZACIÓN
                 ===================================================== -->

            <section class="seccion-proyecto">

                <div class="cabecera-seccion">

                    <h2>Proceso de automatización</h2>

                    <p>
                        Desglose por fases de los circuitos implementados en el workflow.
                    </p>

                </div>


                <div class="bloques-tecnicos pasos-proceso">


                    <!-- FASE 1 -->

                    <article class="bloque-tecnico">

                        <h3>
                            Fase 1 · Envío proactivo y validación
                        </h3>

                        <p>
                            Un trigger programado activa el flujo diariamente. El sistema consulta <strong>Google Sheets</strong>, filtra los registros pendientes y limita el procesamiento a lotes controlados (20 contactos). Antes de enviar nada, <strong>Evolution API</strong> comprueba si el número dispone realmente de WhatsApp activo.
                        </p>

                        <p>
                            Tras el envío del mensaje personalizado, se actualiza el estado en la hoja de cálculo y se genera una ficha de seguimiento en el histórico para evitar duplicados.
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
                            Fase 2 · Buffer en tiempo real y multimodalidad
                        </h3>

                        <p>
                            Los mensajes entrantes se capturan mediante webhooks y se almacenan temporalmente en <strong>Redis</strong>. Esto actúa como un buffer inteligente: si el usuario escribe varios mensajes seguidos o audios cortos, el sistema espera unos segundos y los agrupa en un único turno, evitando que el bot responda de forma fragmentada.
                        </p>
                        <div class="proyecto-imagen-principal">

                        <a href="assets/img/agenteWhatsapp/buffer.png"
                           target="_blank">

                            <img src="assets/img/agenteWhatsapp/buffer.png"
                                 alt="Buffer de mensajes en Redis">

                        </a>
                            </div>
                        <p>
                            Si se reciben notas de voz, se descargan y transcriben automáticamente con <strong>Whisper</strong> antes de unificar todo el contenido por marcas temporales y cruzarlo con la ficha del lead.
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
                            Fase 3 · Agente IA y herramientas autónomas
                        </h3>

                        <p>
                            El <strong>AI Agent</strong> recibe el contexto unificado del usuario y gestiona una memoria persistente alojada en <strong>PostgreSQL</strong> (separando las sesiones por cada número de teléfono). Su estrategia comercial se rige por un prompt estructurado en fases de cualificación.
                        </p>

                        <div class="proyecto-imagen-principal">
                            <a href="assets/img/agenteWhatsapp/prompt_agente.png" target="_blank">
                                <img src="assets/img/agenteWhatsapp/prompt_agente.png" alt="Configuración del Agente IA y su prompt">
                            </a>
                        </div>

                        <p>
                            Lo más revolucionario de esta arquitectura es que <strong>el modelo decide de forma autónoma cuándo utilizar herramientas externas</strong>. No siguen una secuencia fija: según la evolución de la conversación, el agente selecciona dinámicamente la acción necesaria:
                        </p>

                        <ul style="margin: 15px 0 15px 20px; line-height: 1.6;">
                            <li><strong>Google Sheets · Agregar Interesados:</strong> Registra o actualiza los datos del lead y su franja horaria de disponibilidad si muestra interés pero no concreta la cita de inmediato.</li>
                            <li><strong>Google Sheets · Agregar Agendado:</strong> Guarda el registro formal de la llamada una vez concertada para mantener la trazabilidad en el CRM.</li>
                            <li><strong>Google Calendar · Consultar eventos:</strong> Comprueba la disponibilidad real de la agenda antes de proponer o confirmar una hora con el propietario.</li>
                            <li><strong>Google Calendar · Crear evento:</strong> Agenda de forma automática el evento de seguimiento en cuanto se acuerda una fecha exacta.</li>
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
                            Fase 4 · Reactivación automática de leads
                        </h3>

                        <p>
                            Mediante un trigger diario, el sistema revisa la hoja de seguimiento para detectar aquellos contactos que no cerraron cita pero cuya fecha de reactivación toca ese día.
                        </p>

                        <p>
                            Se valida que el usuario no haya agendado previamente por otra vía y se dispara de forma automática un mensaje personalizado para retomar la conversación, actualizando el CRM sin intervención manual.
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
         HERRAMIENTAS DEL AGENTE
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Herramientas del agente
            </h2>

            <p>
                Una de las partes principales del sistema es la capacidad del
                agente para utilizar herramientas externas durante la
                conversación.
            </p>

        </div>


        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    Google Sheets · Agregar interesados
                </h3>

                <p>
                    Registra o actualiza los datos de un posible cliente y
                    su franja horaria de disponibilidad para una futura
                    llamada.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Sheets · Agregar agendado
                </h3>

                <p>
                    Registra la llamada una vez que ha sido concertada y
                    mantiene la información necesaria para su seguimiento.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Calendar · Consultar eventos
                </h3>

                <p>
                    Permite comprobar la disponibilidad real del calendario
                    antes de proponer o confirmar una fecha y hora.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Calendar · Crear evento
                </h3>

                <p>
                    Cuando el usuario y el agente acuerdan una fecha y hora,
                    el agente puede crear directamente el evento de
                    seguimiento.
                </p>

            </article>

        </div>


        <div class="bloque-tecnico">

            <h3>
                La decisión la toma el agente
            </h3>

            <p>
                Estas herramientas no forman una secuencia fija dentro del
                workflow. El proceso llega al <strong>AI Agent</strong> y es
                el propio modelo quien decide, según la información de la
                conversación, qué herramienta necesita utilizar, cuándo
                utilizarla y en qué orden.
            </p>

            <p>
                Por ejemplo, si una persona muestra interés pero todavía no
                concreta una llamada, el agente puede registrar sus datos y
                disponibilidad en Sheets. Si posteriormente se acuerda una
                hora, puede consultar Calendar, comprobar la disponibilidad y
                crear el evento una vez confirmada.
            </p>

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
            El resultado es un sistema que automatiza el ciclo completo de
            captación: desde el primer contacto con un propietario hasta la
            conversación, el registro del interesado y la posibilidad de
            agendar una llamada.
        </p>

        <p>
            El agente mantiene el contexto de cada conversación, puede
            procesar tanto mensajes de texto como audios y dispone de
            herramientas para consultar y actualizar información externa.
        </p>

        <p>
            Cuando una conversación no termina en una llamada, el sistema
            puede realizar automáticamente un seguimiento posterior sin
            necesidad de revisar manualmente cada contacto.
        </p>

    </section>


    <!-- =====================================================
         VALOR TÉCNICO
         ===================================================== -->

    <section class="seccion-proyecto">

        <div class="cabecera-seccion">

            <h2>
                Valor técnico
            </h2>

        </div>

        <div class="bloques-tecnicos">

            <article class="bloque-tecnico">

                <h3>
                    Agente con memoria
                </h3>

                <p>
                    Implementación de un agente conversacional con memoria
                    persistente y una estrategia definida mediante prompt.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Buffer de mensajes
                </h3>

                <p>
                    Redis permite agrupar mensajes consecutivos y evitar que
                    el agente responda varias veces cuando el usuario escribe
                    varios mensajes seguidos.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Procesamiento multimodal
                </h3>

                <p>
                    El mismo flujo puede procesar mensajes de texto y audios
                    mediante transcripción antes de enviarlos al agente.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Herramientas autónomas
                </h3>

                <p>
                    El agente puede utilizar servicios externos según las
                    necesidades detectadas durante la conversación.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Automatización híbrida
                </h3>

                <p>
                    Combina triggers programados con eventos recibidos en
                    tiempo real mediante webhooks.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Control de estados
                </h3>

                <p>
                    Google Sheets mantiene los estados de los contactos y
                    permite evitar procesamientos y envíos duplicados.
                </p>

            </article>

        </div>

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
                    LangChain
                </h3>

                <p>
                    Arquitectura del agente, herramientas y memoria mediante
                    el nodo AI Agent de n8n.
                </p>

            </article>


            <article class="bloque-tecnico">

                <h3>
                    Google Sheets
                </h3>

                <p>
                    Leads, CRM, estados de contacto y registro de
                    conversaciones.
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

        <a href="#" class="boton-proyecto">
            Ver código
        </a>

        <a href="index.php" class="enlace-proyecto">
            ← Volver al portfolio
        </a>

    </section>

</main>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>
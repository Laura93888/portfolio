<?php

require_once 'data/proyectos.php';

$proyecto = null;

foreach ($proyectos["automatizaciones"] as $item) {
    if ($item["titulo"] === "Agente IA para WhatsApp") {
        $proyecto = $item;
        break;
    }
}

$titulo = $proyecto["titulo"];
$descripcion = $proyecto["descripcion"];
$tecnologias = $proyecto["tecnologias"];
$categoria = "Automatización e IA";
$descripcionlarga=$proyecto["descripcionlarga"];

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Agente conversacional de WhatsApp desarrollado con n8n para automatizar la captación, conversación, seguimiento y agendado de llamadas con propietarios.">

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

        <span class="etiqueta-bloque">
            <?= $categoria; ?>
        </span>

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
                El workflow combina procesos programados y eventos recibidos
                en tiempo real para gestionar el ciclo completo del contacto.
            </p>

        </div>


        <!-- =================================================
             PROCESO 1
             ================================================= -->

        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 1
            </span>

            <h3>
                Envío proactivo de primeros mensajes
            </h3>

            <p>
                El sistema parte de una base de leads almacenada en
                Google Sheets y realiza diariamente el primer contacto con
                los propietarios que cumplen las condiciones establecidas.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <!-- PASOS 01-03 -->

            <article class="bloque-tecnico">

                <h3>
                    01–03 · Selección, validación y envío
                </h3>

                <p>
                    Un trigger programado inicia el proceso diariamente a las
                    <strong>10:00</strong>. El workflow consulta Google Sheets
                    y selecciona los leads que cumplen las condiciones
                    establecidas, descartando aquellos que no disponen de
                    teléfono.
                </p>

                <p>
                    Para controlar el volumen de cada ejecución se limita el
                    procesamiento a <strong>20 contactos</strong>. Antes de
                    enviar el mensaje, <strong>Evolution API</strong> comprueba
                    si el número dispone de WhatsApp.
                </p>

                <p>
                    Los contactos válidos reciben un primer mensaje
                    personalizado utilizando datos del lead, como su nombre
                    y la URL del anuncio. Entre los diferentes envíos se
                    introduce una espera para controlar el ritmo de contacto.
                </p>

                <p>
                    Una vez realizado el proceso, el estado del contacto se
                    actualiza en Google Sheets, diferenciando los registros a
                    los que se ha enviado el mensaje de aquellos que no
                    disponen de WhatsApp.
                </p>

                <p>
                    Además, el contacto se copia a una hoja de historial que
                    funciona como ficha de seguimiento y permite conservar
                    la información necesaria para las siguientes etapas.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/envio_proactivo_msjes.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/envio_proactivo_msjes.png"
                             alt="Flujo de selección, validación y envío proactivo de mensajes por WhatsApp">

                    </a>

                </div>

            </article>



        <!-- =================================================
             PROCESO 2
             ================================================= -->

        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 2
            </span>

            <h3>
                Conversación entrante con agente de IA
            </h3>

            <p>
                Cuando el propietario responde, el sistema recibe el mensaje,
                lo procesa y lo entrega al agente con el contexto necesario
                para mantener la conversación.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <!-- PASO 05 -->

            <article class="bloque-tecnico">

                <h3>
                    05 · Recibir y normalizar el mensaje
                </h3>

                <p>
                    <strong>Evolution API</strong> envía los mensajes
                    entrantes al workflow mediante un webhook.
                </p>

                <p>
                    Antes de continuar, se normalizan los datos recibidos,
                    como el número de teléfono, el tipo de contenido, el
                    texto y la marca temporal.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/normalizacion_datos.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/normalizacion_datos.png"
                             alt="Webhook y normalización de los datos recibidos">

                    </a>

                </div>

            </article>


            <!-- PASO 06 -->

            <article class="bloque-tecnico">

                <h3>
                    06 · Agrupar mensajes con Redis
                </h3>

                <p>
                    Los mensajes entrantes se almacenan temporalmente en
                    <strong>Redis</strong> en lugar de responder
                    inmediatamente.
                </p>

                <p>
                    El sistema espera unos segundos y comprueba si ha llegado
                    un mensaje posterior. Si el usuario continúa escribiendo,
                    la ejecución anterior se cancela y únicamente continúa
                    el procesamiento más reciente.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/buffer.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/buffer.png"
                             alt="Buffer de mensajes con Redis">

                    </a>

                </div>

            </article>


            <!-- PASO 07 -->

            <article class="bloque-tecnico">

                <h3>
                    07 · Procesar texto y audio
                </h3>

                <p>
                    Una vez agrupados los mensajes, el sistema identifica el
                    tipo de contenido recibido.
                </p>

                <p>
                    Los mensajes de texto continúan directamente, mientras
                    que los audios se descargan y se transcriben mediante
                    <strong>Whisper</strong>.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/procesamiento_por_tipo.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/procesamiento_por_tipo.png"
                             alt="Procesamiento de mensajes según su tipo de contenido">

                    </a>

                </div>

            </article>


            <!-- PASOS 08-09 -->

            <article class="bloque-tecnico">

                <h3>
                    08–09 · Unificar mensajes y recuperar el contexto
                </h3>

                <p>
                    Los mensajes se ordenan mediante su timestamp y se
                    agrupan en un único texto para que el agente pueda
                    interpretar el turno completo del usuario.
                </p>

                <p>
                    También se normaliza el número de teléfono al formato
                    utilizado por Google Sheets y se utiliza para localizar
                    la ficha correspondiente al contacto.
                </p>

                <p>
                    De esta forma, el agente recibe información contextual
                    como el nombre, la descripción del inmueble, la
                    plataforma de origen y la URL del anuncio.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/ordenacion_unificacion.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/ordenacion_unificacion.png"
                             alt="Ordenación, unificación de mensajes y recuperación del contexto del contacto">

                    </a>

                </div>

            </article>


            <!-- PASO 10 -->

            <article class="bloque-tecnico">

                <h3>
                    10 · Agente IA con memoria
                </h3>

                <p>
                    El <strong>AI Agent</strong> recibe el mensaje unificado
                    junto con la información del contacto y mantiene el
                    historial de la conversación mediante una sesión
                    independiente para cada número de teléfono.
                </p>

                <p>
                    La memoria se almacena en
                    <strong>PostgreSQL</strong>, evitando mezclar las
                    conversaciones de diferentes contactos.
                </p>

                <p>
                    El prompt define una estrategia comercial por fases:
                    detectar interés, presentar el valor del servicio,
                    responder objeciones y tratar de cerrar una llamada
                    cuando existe interés suficiente.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/prompt_agente.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/prompt_agente.png"
                             alt="Configuración del agente de IA y su prompt">

                    </a>

                </div>

            </article>


            <!-- PASO 11 -->

            <article class="bloque-tecnico">

                <h3>
                    11 · Utilizar herramientas de forma autónoma
                </h3>

                <p>
                    El agente tiene acceso a herramientas conectadas con
                    <strong>Google Sheets</strong> y
                    <strong>Google Calendar</strong>.
                </p>

                <p>
                    No se ejecutan como una secuencia fija. Es el propio
                    modelo quien determina, según la conversación, qué
                    herramienta necesita utilizar y en qué momento.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/opciones_autonomas_agente.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/opciones_autonomas_agente.png"
                             alt="Herramientas autónomas disponibles para el agente de IA">

                    </a>

                </div>

            </article>


            <!-- PASO 12 -->

            <article class="bloque-tecnico">

                <h3>
                    12 · Responder y registrar la conversación
                </h3>

                <p>
                    La respuesta generada por el agente se envía al usuario
                    mediante WhatsApp.
                </p>

                <p>
                    Paralelamente, el mensaje recibido, la respuesta del bot,
                    el teléfono y la fecha quedan registrados en una hoja de
                    log para conservar el histórico de la conversación.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/conversacion-ia.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/conversacion-ia.png"
                             alt="Conversación entre el usuario y el agente de IA">

                    </a>

                </div>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/historial_conver.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/historial_conver.png"
                             alt="Historial de la conversación registrado en el sistema">

                    </a>

                </div>

            </article>

        </div>


        <!-- =================================================
             PROCESO 3
             ================================================= -->

        <div class="cabecera-proceso">

            <span class="numero-proceso">
                Proceso 3
            </span>

            <h3>
                Reactivación automática
            </h3>

            <p>
                Los contactos que no han terminado el proceso pueden recibir
                automáticamente un nuevo mensaje cuando corresponde realizar
                el seguimiento.
            </p>

        </div>


        <div class="bloques-tecnicos pasos-proceso">


            <!-- PASOS 13-16 -->

            <article class="bloque-tecnico">

                <h3>
                    13–16 · Detectar, comprobar, reactivar y registrar
                </h3>

                <p>
                    Un trigger programado ejecuta diariamente el flujo y
                    consulta la hoja de seguimiento para localizar los
                    contactos cuya fecha de reactivación corresponde a ese
                    día.
                </p>

                <p>
                    Antes de contactar nuevamente, se comprueba el estado del
                    registro para evitar enviar mensajes a personas que ya
                    hayan agendado una llamada o que ya hayan sido
                    procesadas.
                </p>

                <p>
                    Los contactos que cumplen las condiciones reciben
                    automáticamente un nuevo mensaje por WhatsApp para
                    retomar la conversación.
                </p>

                <p>
                    Después del envío, Google Sheets se actualiza para dejar
                    constancia de la reactivación y evitar que el mismo
                    contacto vuelva a procesarse de forma duplicada.
                </p>

                <div class="proyecto-imagen-principal">

                    <a href="assets/img/agenteWhatsapp/reactivacion_automatica_mensaje.png"
                       target="_blank">

                        <img src="assets/img/agenteWhatsapp/reactivacion_automatica_mensaje.png"
                             alt="Flujo general de reactivación automática de contactos">

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
            Ver automatización
        </a>

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
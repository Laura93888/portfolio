<?php

$proyectos = [

    "desarrollo" => [
        [
            "titulo" => "Body & Soul",
            "descripcion" => "Plataforma web para buscar y reservar actividades deportivas y de bienestar.",
            "tecnologias" => ["HTML", "CSS", "JavaScript", "PHP", "MySQL"],
            "enlace" => "bodyandsoul.php",
            "descripcionlarga" => "Plataforma web para buscar, consultar y reservar actividades deportivas y de bienestar según diferentes criterios como categoría, fecha o ubicación. Los usuarios pueden consultar la disponibilidad, gestionar sus reservas, guardar actividades favoritas y dejar reseñas, mientras que empresas y administradores disponen de sus propios paneles de gestión."
        ],
        [
            "titulo" => "Tienda online",
            "descripcion" => "Aplicación web de comercio electrónico con productos, categorías y carrito de compra.",
            "tecnologias" => ["HTML", "CSS", "JavaScript", "PHP", "MySQL", "Make"],
            "enlace" => "tienda.php",
        "descripcionlarga" => "Aplicación web de comercio electrónico desarrollada con PHP y MariaDB, con catálogo de productos, categorías, carrito de compra, gestión de sesiones y diferentes funcionalidades para la gestión de la tienda."
        ],
        [
            "titulo" => "Biblioteca digital",
            "descripcion" => "Aplicación web para gestionar un catálogo de libros y su sistema de préstamos.",
            "tecnologias" => ["HTML", "CSS", "JavaScript", "PHP", "MySQL"],
            "enlace" => "bookify.php",
            "descripcionlarga" => "Aplicación web de gestión de biblioteca desarrollada con PHP y MariaDB, que permite consultar el catálogo, gestionar libros y autores y controlar el préstamo y devolución de ejemplares mediante una interfaz orientada a la gestión de la información"
        ],
        [
            "titulo" => "Aplicación del tiempo",
            "descripcion" => "Aplicación web que consulta una API meteorológica y muestra los datos dinámicamente.",
            "tecnologias" => ["HTML", "CSS", "JavaScript", "PHP", "API", "JSON"],
            "enlace" => "weatherly.php",
            "descripcionlarga" => "Aplicación web desarrollada con PHP que conecta con una API meteorológica para obtener datos en tiempo real y mostrar información del tiempo de forma dinámica, trabajando con peticiones externas y procesamiento de datos."
        ],
        [
            "titulo" => "Consulta de colegios",
            "descripcion" => "Aplicación web para consultar información de centros educativos mediante una API.",
            "tecnologias" => ["HTML", "CSS", "JavaScript", "PHP", "API", "JSON"],
            "enlace" => "colegios.php",
            "descripcionlarga" => "Aplicación web desarrollada con PHP que utiliza datos abiertos del Ayuntamiento de Madrid para consultar y localizar centros educativos mediante un sistema de búsqueda y filtrado.",
    
        ]
    ],

    "automatizaciones" => [
        [
            "titulo" => "Automatización de extracción de emails",
            "descripcion" => "Flujo automatizado para localizar empresas y acceder a sus páginas webp para extraer emails y datos de contacto, enriquecido con LinkedIn.",
            "descripcionlarga" => "Flujo automatizado que parte de la búsqueda de empresas y analiza sus páginas web para localizar emails y otros datos de contacto. Cuando esta información no está disponible, utiliza LinkedIn como fuente adicional.",
            "tecnologias" => ["n8n", "Apify", "JavaScript", "Web Scraping"],
            "capturas" => [
                "actor_maps.png",
                "extraccion_maps.png",
                "almacenamiento_sheet.png",
                "form.png",
                "datos_form.png",
                "http_request.png",
                "extracion_email.png",
                "serpApi_linkedin.png",
                "url_linkedin.png",
                "extraer_email_linkedin.png",
                "ampliacion_linkedin.png",
                "actor_linkedin.png"
            ],
            "enlace" => "extraccionemails.php"
        ],
        [
            "titulo" => "Scraping avanzado con bots personalizados",
            "descripcion" => "Sistema automatizado con bots capaces de navegar e interactuar con diferentes páginas web para extraer información.",
            "descripcionlarga" => "Sistema de scraping automatizado con bots capaces de navegar e interactuar con páginas web para obtener información que no puede extraerse mediante un scraping convencional, reduciendo así el trabajo manual necesario para recopilar y preparar estos datos.",
            "tecnologias" => ["n8n", "Apify", "Playwright", "JavaScript", "Web Scraping"],
            "capturas" => [
                "preparacion_urls.png",
                "actor_personalizado.png",
                "web_scrapper.png",
                "fotocasa.png",
                "milanuncios.png",
                "kelify.png",
                "limpieza_datos.png",
                "limpiezadatos2.png"
            ],
            "enlace" => "scrappingmultiportal.php"
        ],
        [
            "titulo" => "Agente IA para WhatsApp",
            "descripcion" => "Agente de IA autónomo que contacta con potenciales clientes por WhatsApp, mantiene conversaciones y concierta llamadas automáticamente.",
            "descripcionlarga" => "Agente de IA autónomo que inicia conversaciones con potenciales clientes a través de WhatsApp, responde de forma automática, identifica su interés y concierta llamadas. Además, registra la información de los contactos y las llamadas en una hoja de cálculo y en el calendario.",
            "tecnologias" => ["n8n", "JavaScript", "WhatsApp", "Google Sheets", "Google Calendar", "IA"],
            "capturas" => [
                "flujo completo.png",
                "normalizacion_datos.png",
                "procesamiento_por_tipo.png",
                "ordenacion_unificacion.png",
                "buffer.png",
                "prompt_agente.png",
                "conversacion-ia.png",
                "historial_conver.png",
                "opciones_autonomas_agente.png",
                "envio_proactivo_msjes.png",
                "reactivacion_automatica_mensaje.png"
            ],
            "enlace" => "agentewhatsApp.php"
        ],
    ],

    "wordpress" => [
        [
            "titulo" => "Web corporativa",
            "descripcion" => "Web profesional desarrollada con WordPress y enfocada en una presentación clara y responsive.",
            "tecnologias" => ["WordPress", "Divi", "CSS"],
            "enlace" => "proyectos/wordpress/web-corporativa.php"
        ],
        [
            "titulo" => "Landing page",
            "descripcion" => "Landing page creada con WordPress para presentar un servicio de forma clara y visual.",
            "tecnologias" => ["WordPress", "CSS"],
            "enlace" => "proyectos/wordpress/landing-page.php"
        ]
    ]

];
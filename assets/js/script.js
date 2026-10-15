const botonesCategoria = document.querySelectorAll(".tarjeta-categoria");
const listaProyectos = document.querySelector(".lista-proyectos");

// Los nombres se leen de los botones que pinta PHP
const nombres = {};
    botonesCategoria.forEach(b => {
    nombres[b.dataset.categoria] = b.querySelector("strong").textContent;
});


function mostrarProyectos(categoria) {
    listaProyectos.innerHTML = "";

    for (const clave in proyectos) {
    // Filtro, por el grupo de PHP
         if (categoria !== clave) continue;

        proyectos[clave].forEach(proyecto => {

        // las etiquetas se calculan aquí
        const categorias = [nombres[clave], proyecto.categoriaextra].filter(Boolean);

        const tarjeta = document.createElement("article");
        tarjeta.classList.add("tarjeta-proyecto");

        const contenido = document.createElement("div");
        const listaCategorias = document.createElement("div");
        listaCategorias.className = "categorias-proyecto";
        categorias.forEach(categoriaTexto => {
            const etiqueta = document.createElement("span");
            etiqueta.dataset.categoria = categoriaTexto;
            etiqueta.textContent = categoriaTexto;
            listaCategorias.appendChild(etiqueta);
        });
        contenido.appendChild(listaCategorias);

        const titulo = document.createElement("h3");
        titulo.textContent = proyecto.titulo;
        contenido.appendChild(titulo);

        const descripcion = document.createElement("p");
        descripcion.textContent = proyecto.descripcion;
        contenido.appendChild(descripcion);
        tarjeta.appendChild(contenido);

        const tecnologias = document.createElement("div");
        tecnologias.className = "tecnologias-proyecto";
        proyecto.tecnologias.forEach(tecnologiaTexto => {
            const etiqueta = document.createElement("span");
            etiqueta.textContent = tecnologiaTexto;
            tecnologias.appendChild(etiqueta);
        });
        tarjeta.appendChild(tecnologias);

        try {
            const destino = new URL(proyecto.enlace, window.location.href);
            if (destino.origin === window.location.origin) {
                const enlace = document.createElement("a");
                enlace.href = destino.href;
                enlace.className = "enlace-proyecto";
                enlace.textContent = "Ver proyecto →";
                tarjeta.appendChild(enlace);
            }
        } catch {
            // Ignora destinos inválidos sin interrumpir el listado.
        }

        listaProyectos.appendChild(tarjeta);
    });
}
                                      }


botonesCategoria.forEach(boton => {
    boton.addEventListener("click", () => {
        const categoria = boton.dataset.categoria;

        botonesCategoria.forEach(b => b.classList.remove("activa"));
        boton.classList.add("activa");

        mostrarProyectos(categoria);

        const url = new URL(window.location.href);
        url.searchParams.set("categoria", categoria);
        window.history.replaceState(null, "", url);
    });
});

const categoriaSolicitada = new URLSearchParams(window.location.search).get("categoria");
const botonInicial = Array.from(botonesCategoria).find(
    boton => boton.dataset.categoria === categoriaSolicitada
) || document.querySelector(".tarjeta-categoria.activa");

if (botonInicial) {
    botonesCategoria.forEach(boton => boton.classList.remove("activa"));
    botonInicial.classList.add("activa");
    mostrarProyectos(botonInicial.dataset.categoria);
}
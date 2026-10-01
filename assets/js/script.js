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

        tarjeta.innerHTML = `
            <div>
            <div class="categorias-proyecto">
                    ${categorias.map(c => `<span data-categoria="${c}">${c}</span>`).join("")}
                </div>
                <h3>${proyecto.titulo}</h3>
                <p>${proyecto.descripcion}</p>
            </div>

            <div class="tecnologias-proyecto">
                ${proyecto.tecnologias.map(tecnologia => `<span>${tecnologia}</span>`).join("")}
            </div>

            <a href="${proyecto.enlace}" class="enlace-proyecto">
                Ver proyecto →
            </a>
        `;

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
    });
});

mostrarProyectos(document.querySelector(".tarjeta-categoria.activa").dataset.categoria);
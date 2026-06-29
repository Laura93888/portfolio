const botonesCategoria = document.querySelectorAll(".tarjeta-categoria");
const listaProyectos = document.querySelector(".lista-proyectos");

function mostrarProyectos(categoria) {
    listaProyectos.innerHTML = "";

    proyectos[categoria].forEach(proyecto => {
        const tarjeta = document.createElement("article");
        tarjeta.classList.add("tarjeta-proyecto");

        tarjeta.innerHTML = `
            <div>
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

botonesCategoria.forEach(boton => {
    boton.addEventListener("click", () => {
        const categoria = boton.dataset.categoria;

        botonesCategoria.forEach(b => b.classList.remove("activa"));
        boton.classList.add("activa");

        mostrarProyectos(categoria);
    });
});

mostrarProyectos("desarrollo");
const botonesCategoria = document.querySelectorAll(".tarjeta-categoria");
const listaProyectos = document.querySelector(".lista-proyectos");

const nombres = {
    desarrollo: "Desarrollo Web",
    automatizaciones: "Automatización",
    wordpress: "WordPress"
};

const todos = Object.entries(proyectos).flatMap(([clave, lista]) =>
    lista.map(p => ({
        ...p,
        categorias: [nombres[clave], p.categoriaextra].filter(Boolean)
    }))
);

function mostrarProyectos(categoria) {
    listaProyectos.innerHTML = "";

    const categoriaTraducida = nombres[categoria];

    const filtrados = categoria === "todos"
        ? todos
        : todos.filter(p => p.categorias.includes(categoriaTraducida));

    filtrados.forEach(proyecto => {
        const tarjeta = document.createElement("article");
        tarjeta.classList.add("tarjeta-proyecto");

        tarjeta.innerHTML = `
            <div>
            <div class="categorias-proyecto">
                    ${proyecto.categorias.map(c => `<span data-categoria="${c}">${c}</span>`).join("")}
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

botonesCategoria.forEach(boton => {
    boton.addEventListener("click", () => {
        const categoria = boton.dataset.categoria;

        botonesCategoria.forEach(b => b.classList.remove("activa"));
        boton.classList.add("activa");

        mostrarProyectos(categoria);
    });
});

mostrarProyectos("todos");
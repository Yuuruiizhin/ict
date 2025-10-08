// ICT Talagante - Animación inicial y control de navegación
// Autor: ChatGPT (Optimización estética y funcional)
// Última actualización: 2025-10-07

document.addEventListener("DOMContentLoaded", () => {
    const splash = document.getElementById("splash");
    const secciones = document.querySelectorAll(".contenido-seccion");
    const enlaces = document.querySelectorAll("[data-target]");

    // Mostrar splash inicial durante 3 segundos
    setTimeout(() => {
        if (splash) {
            splash.classList.add("hidden");
        }

        // Activa sección de inicio al cargar
        const inicio = document.getElementById("inicio");
        if (inicio) inicio.classList.add("active");
    }, 3000);

    // Manejo de navegación con data-target
    enlaces.forEach((enlace) => {
        enlace.addEventListener("click", (e) => {
            e.preventDefault();

            const destinoID = enlace.getAttribute("data-target");
            if (!destinoID) return;

            // Ocultar todas las secciones
            secciones.forEach((sec) => sec.classList.remove("active"));

            // Mostrar la sección destino
            const destino = document.getElementById(destinoID);
            if (destino) {
                destino.classList.add("active");
                destino.scrollIntoView({ behavior: "smooth" });
            }
        });
    });

    // Prevención de errores: si el usuario recarga en otra sección, mostrar inicio
    window.addEventListener("pageshow", () => {
        const visible = document.querySelector(".contenido-seccion.active");
        if (!visible && document.getElementById("inicio")) {
            document.getElementById("inicio").classList.add("active");
        }
    });
});

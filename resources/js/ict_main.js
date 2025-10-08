// ict_main.js - controls splash atom and section navigation
document.addEventListener("DOMContentLoaded", function () {
    const splash = document.getElementById("splash");
    const secciones = document.querySelectorAll(".contenido-seccion");
    const enlaces = document.querySelectorAll("[data-target]");

    // Show splash 2.8s then hide and activate inicio
    const SPLASH_TIME = 2800;
    setTimeout(() => {
        if (splash) splash.classList.add("hidden");
        const inicio = document.getElementById("inicio");
        if (inicio) inicio.classList.add("active");
    }, SPLASH_TIME);

    // Navigation behavior
    enlaces.forEach(function (el) {
        el.addEventListener("click", function (e) {
            e.preventDefault();
            const target = this.getAttribute("data-target");
            if (!target) return;
            document.querySelectorAll(".contenido-seccion").forEach(s => s.classList.remove("active"));
            const sec = document.getElementById(target);
            if (sec) {
                sec.classList.add("active");
                sec.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    });

    // Ensure at least inicio visible if none active
    window.addEventListener("pageshow", function () {
        if (!document.querySelector(".contenido-seccion.active")) {
            const inicio = document.getElementById("inicio");
            if (inicio) inicio.classList.add("active");
        }
    });
});

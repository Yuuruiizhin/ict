document.addEventListener('DOMContentLoaded', () => {
    // 1. Selecciona todos los elementos con un atributo 'data-target' que actúan como botones
    // Esto incluye los enlaces del nav, el logo, y el "navbar-brand".
    const botones = document.querySelectorAll('[data-target]');
    
    // 2. Selecciona todos los contenedores de contenido
    const contenedores = document.querySelectorAll('.contenido-seccion');
    
    // 3. Define el ID de la sección de inicio (clave para la excepción)
    const idInicio = 'inicio';
    
    // Función para gestionar la visibilidad y la animación
    const mostrarContenedor = (targetId) => {
        contenedores.forEach(contenedor => {
            // Comprueba si el contenedor existe (para evitar errores si un target no tiene un contenedor)
            if (contenedor) {
                if (contenedor.id === targetId) {
                    // Mostrar: Añade la clase 'active' para activar la animación slide-up
                    contenedor.classList.add('active');
                } else {
                    // Ocultar: Remueve la clase 'active' para ocultar
                    contenedor.classList.remove('active');
                }
            }
        });
    };

    // 4. Asignar el evento click a cada "botón"
    botones.forEach(boton => {
        boton.addEventListener('click', (evento) => {
            // Previene la navegación por defecto del enlace <a>
            evento.preventDefault();
            
            // Obtiene el ID del contenedor objetivo
            const targetId = boton.getAttribute('data-target');
            
            // Llama a la función para mostrar la sección
            if (targetId) {
                mostrarContenedor(targetId);
            }

            // Opcional: Cerrar el menú colapsable de Bootstrap después de hacer clic en un enlace
            // (Útil en móviles)
            const navbarCollapse = document.getElementById('navbarNavDropdown');
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    toggle: false
                });
                bsCollapse.hide();
            }
        });
    });

    // 5. **Excepción de Inicio:** Cargar la página mostrando la sección de Inicio al cargar
    // Usamos un pequeño retraso para asegurar que los estilos CSS se apliquen correctamente para la animación inicial.
    setTimeout(() => {
         mostrarContenedor(idInicio);
    }, 50); 
});
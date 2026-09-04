import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/**
 * =========================================================================
 * DISESBA - Scroll Reveal Animations (IntersectionObserver Bidireccional)
 * =========================================================================
 * Reacciona tanto al bajar como al subir el scroll.
 * Rendimiento óptimo sin listeners globales de scroll.
 */
document.addEventListener('DOMContentLoaded', () => {
    // Si el usuario prefiere movimiento reducido, no inicializar animaciones
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.querySelectorAll('.reveal, .reveal-up, .reveal-left, .reveal-right, .reveal-scale')
            .forEach(el => el.classList.add('is-visible'));
        return;
    }

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -8% 0px',
        threshold: 0.15
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            } else {
                // Al salir del viewport por arriba o abajo, se retira la clase
                // para que vuelva a animarse suavemente al re-entrar
                const rect = entry.boundingClientRect;
                const isAbove = rect.bottom < 0;
                const isBelow = rect.top > window.innerHeight;
                
                if (isAbove || isBelow) {
                    entry.target.classList.remove('is-visible');
                }
            }
        });
    }, observerOptions);

    // Función para registrar elementos reveal
    const observeReveals = () => {
        const revealElements = document.querySelectorAll(
            '.reveal, .reveal-up, .reveal-left, .reveal-right, .reveal-scale'
        );

        revealElements.forEach(el => {
            // Comprobación inmediata para evitar FOUC en elementos ya dentro del viewport
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                el.classList.add('is-visible');
            }
            revealObserver.observe(el);
        });
    };

    observeReveals();

    // Compatibilidad reactiva con cambios de filtros en Catálogo
    window.addEventListener('catalog-updated', () => {
        setTimeout(observeReveals, 50);
    });
});

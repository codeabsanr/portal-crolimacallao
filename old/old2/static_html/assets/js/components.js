/**
 * CROLIMA Static Component Loader
 * Handles dynamic injection of partials and relative path resolution.
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Calculate relative path prefix
    // We determine the depth by seeing how many levels we are below the 'assets' or 'partials' containers
    // but a more robust way for static files is counting slashes relative to a known marker or the current path.

    // We assume the site root contains 'assets/' and 'partials/'
    // We'll calculate 'prefix' once and use it for all components.

    // Improved detection: use the script's own src URL to find the 'assets' root!
    const scripts = document.getElementsByTagName('script');
    let assetsPath = '';
    for (let s of scripts) {
        if (s.src.includes('assets/js/components.js')) {
            assetsPath = s.src.split('assets/js/components.js')[0];
            break;
        }
    }

    // But since fetch needs a relative path often to work locally or we use absolute from protocol
    // Let's stick to relative prefix logic but make it smarter.
    const path = window.location.pathname;

    // If we're on a local file system (C:\...), pathname might be different.
    // We'll count slices from the end until we find index.html or folders.

    let depth = 0;
    const parts = path.split('/').filter(p => p !== '');

    // If the last part is index.html, we ignore it for depth.
    // We need to know where 'static_html' is in the path.
    const rootMarker = 'static_html';
    const rootIndex = parts.indexOf(rootMarker);
    if (rootIndex !== -1) {
        // Depth is number of parts after 'static_html' minus the index.html file if present
        let afterRoot = parts.slice(rootIndex + 1);
        if (afterRoot.length > 0 && afterRoot[afterRoot.length - 1].endsWith('.html')) {
            afterRoot.pop();
        }
        depth = afterRoot.length;
    } else {
        // Fallback for different hosting: calculate relative to known folders
        // If we can't find static_html, we'll try a simpler folder-based heuristic
        if (path.includes('/institucional/') || path.includes('/tramites/') || path.includes('/colegiados/') ||
            path.includes('/capacitacion/') || path.includes('/actualidad/') || path.includes('/normativa/') || path.includes('/contacto/')) {
            depth = 1;
            // Check for sub-sub folders (depth 2)
            const markers = ['autoridades', 'convenios', 'historia', 'quienes-somos', 'transparencia', 'calendario', 'congresos', 'cursos', 'buscador', 'guia', 'listados', 'canales', 'horarios', 'guias', 'leyes', 'reglamentos', 'repositorio', 'carne', 'colegiatura', 'faq', 'habilidad', 'mesa-partes', 'registros', 'eventos', 'noticias'];
            if (markers.some(m => path.includes(`/${m}/`))) {
                depth = 2;
            }
        }
    }

    const prefix = '../'.repeat(depth);

    // 2. Load Components
    const components = document.querySelectorAll('[data-include]');

    components.forEach(async (el) => {
        const componentName = el.getAttribute('data-include');
        const partialUrl = `${prefix}partials/${componentName}.html`;

        try {
            const response = await fetch(partialUrl);
            if (!response.ok) throw new Error(`Could not load ${partialUrl}`);
            let html = await response.text();

            // Replace {prefix} placeholders in the partial content
            html = html.replace(/{prefix}/g, prefix);

            el.innerHTML = html;
            el.removeAttribute('data-include');

            // Post-injection hooks
            if (componentName === 'navbar') {
                initMobileMenu();
                highlightActiveLink();
            }
        } catch (err) {
            console.error('Error loading component:', err);
        }
    });

    function initMobileMenu() {
        const btn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-mobile-menu');
        const container = document.getElementById('mobile-menu-container');

        if (btn && container) {
            btn.onclick = () => {
                container.classList.remove('translate-x-full');
                document.body.style.overflow = 'hidden'; // Prevent scroll
            };
        }
        if (closeBtn && container) {
            closeBtn.onclick = () => {
                container.classList.add('translate-x-full');
                document.body.style.overflow = ''; // Restore scroll
            };
        }
    }

    function highlightActiveLink() {
        const bodyTag = document.querySelector('body');
        const activePage = bodyTag.getAttribute('data-active-page');
        if (activePage) {
            const links = document.querySelectorAll(`.nav-link[data-page="${activePage}"]`);
            links.forEach(link => {
                link.classList.add('text-primary', 'font-bold', 'border-b-2', 'border-primary');
                link.classList.remove('text-slate-700', 'font-medium');
            });
        }
    }
});

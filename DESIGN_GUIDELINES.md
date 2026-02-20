# Guía de Diseño y Estilos Institucionales (CRO III Lima-Callao)

Esta guía define las reglas de diseño, tipografía, colores y componentes basados en el archivo `index.html` principal y `tailwind-config.js` para asegurar coherencia visual en todo el proyecto.

## 1. Tipografía y Fuentes
- **Fuente Principal:** `Roboto`, sans-serif. Se usa para todo el texto (headings, body, links).
- **Iconografía:** `Material Icons Outlined` (etiqueta `<span class="material-icons-outlined">nombre_icono</span>`).

### Tamaños Comunes:
- **Títulos de Sección (H2):** `text-3xl font-bold text-slate-900 dark:text-white`
- **Subtítulos/Títulos de Tarjeta (H3):** `text-2xl font-bold text-slate-900 dark:text-white`
- **Párrafos Generales:** `text-lg text-slate-600 dark:text-slate-300 leading-relaxed` o `text-lg text-slate-600 dark:text-slate-400 mt-2`.
- **Textos Secundarios (Small):** `text-sm text-slate-500 dark:text-slate-400`.
- **NUNCA:** Evitar tamaños diminutos de plantillas antiguas como `text-[10px]` o `text-xs` a menos que sea estrictamente necesario para etiquetas de poco valor.

## 2. Paleta de Colores
Utilizar siempre la configuración extendida en `tailwind-config.js`.

- **Primario (Marca):** `#660219`. Usar clases `text-primary`, `bg-primary`, `border-primary`.
  - Hover de primario: `hover:bg-primary-dark` (`#4d0213`) o `hover:text-primary`.
- **Secundario:** `bg-secondary` (`#0f172a` - Dark navy) para secciones de contraste corporativo.
- **Fondos (Background):**
  - **Cuerpo principal:** `bg-background-light dark:bg-background-dark` (`#f8f9fa` / `#1e293b`).
  - **Secciones alternas:** `bg-slate-50 dark:bg-slate-900` o `bg-white dark:bg-background-dark`.
- **Superficies (Tarjetas/Contenedores):** `bg-surface-light dark:bg-surface-dark` (`#ffffff` / `#334155`).
- **Texto:**
  - **Principal:** `text-slate-900 dark:text-white` o `text-slate-800 dark:text-slate-100`.
  - **Mutado/Secundario:** `text-slate-600 dark:text-slate-300` o `text-slate-500`.

## 3. Elementos Interactivos

### Botones
- **Botón Primario (Call to Action):**
  ```html
  <button class="bg-primary hover:bg-primary-dark text-white font-bold py-3 px-8 rounded-sm text-lg transition-colors flex items-center justify-center">
      Texto <span class="material-icons-outlined ml-2">icon</span>
  </button>
  ```
- **Botón Outline/Secundario:**
  ```html
  <a class="inline-flex items-center justify-center px-6 py-3 border border-slate-300 dark:border-slate-600 shadow-sm text-base font-medium rounded-sm text-slate-700 dark:text-slate-200 bg-white dark:bg-surface-dark hover:bg-slate-50 dark:hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
      Texto
  </a>
  ```

### Enlaces (Links)
- **Enlace de texto con icono (Ej: "Ver Cursos Disponibles"):**
  ```html
  <a class="inline-flex items-center text-primary font-bold text-lg hover:underline decoration-2 underline-offset-4" href="#">
      Iniciar Trámite <span class="material-icons-outlined ml-2">arrow_forward</span>
  </a>
  ```
- **Enlaces comunes en texto:** `underline hover:text-primary`

## 4. Estructura de Tarjetas (Cards)
Las tarjetas deben tener sombra, bordes suaves, fondo de superficie y transiciones en hover.

```html
<div class="bg-surface-light dark:bg-surface-dark p-8 rounded-md shadow-sm hover:shadow-lg transition-shadow border-l-4 border-primary group cursor-pointer relative overflow-hidden">
    <div class="absolute top-4 right-4 bg-red-50 dark:bg-slate-700 p-3 rounded-full group-hover:bg-primary group-hover:text-white transition-colors text-primary dark:text-red-400">
        <span class="material-icons-outlined text-3xl">icon_name</span>
    </div>
    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3 mt-2">Título</h3>
    <p class="text-slate-600 dark:text-slate-300 mb-8 text-lg leading-relaxed">
        Descripción de la tarjeta o servicio.
    </p>
    <a class="inline-flex items-center text-primary font-bold text-lg hover:underline decoration-2 underline-offset-4" href="#">
        Acción <span class="material-icons-outlined ml-2">arrow_forward</span>
    </a>
</div>
```

## 5. Diseño General y Layout
- **Contenedor Principal:** `<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">`
- **Bordes (Border Radius):** Por lo general, usar `rounded-sm` o `rounded-md` y **nunca** bordes excesivamente redondeados (`rounded-3xl`).
- **Modo Oscuro:** Todas las secciones de fondo oscuro deben preveer el equivalente en Light usando el prefijo `dark:`.
- **Evitar Inconsistencias:** No introducir clases como `tracking-widest` en exceso, ni estructuras de tabla extremadamente complejas u oscuras fuera de los requerimientos de la marca. Mantener la simpleza y espaciado de `index.html`.

# Portal CRO Lima-Callao

Este es el proyecto institucional desarrollado en Laravel 11.x con Tailwind CSS v4, Blade Templating y Livewire v3 para el Colegio Regional de Obstetras III Lima-Callao.

## Requisitos
- PHP >= 8.2 (Recomendado PHP 8.3)
- Composer
- Node.js & NPM
- MySQL o MariaDB

## Instalación

1. Clona el repositorio e instala las dependencias de PHP:
   ```bash
   composer install
   ```

2. Copia el archivo de configuración y genera la clave de la aplicación:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Configura tus credenciales de base de datos MySQL en el archivo `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portal-crolimacallao
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. Ejecuta las migraciones de base de datos:
   ```bash
   php artisan migrate
   ```

5. Instala las dependencias de Node y compila los assets (Tailwind CSS):
   ```bash
   npm install
   npm run build
   ```

6. Levanta el servidor local:
   ```bash
   php artisan serve
   ```

## Estructura de Vistas (Blade)

Las vistas están organizadas de forma modular y se utilizan componentes de Blade y Livewire.
```text
resources/views/
├── components/          # Componentes reutilizables abstractos
│   ├── navbar.blade.php
│   ├── footer.blade.php
│   └── card.blade.php
├── layouts/             # Plantilla principal
│   └── app.blade.php
├── livewire/            # Componentes dinámicos interactivos
│   ├── buscador-normativa.blade.php
│   ├── busca-obstetra.blade.php
│   ├── listado-noticias.blade.php
│   └── mesa-de-partes.blade.php
└── pages/               # Páginas institucionales estáticas/semidinámicas
    ├── actualidad/
    ├── capacitacion/
    ├── colegiados/
    ├── institucional/
    ├── normativa/
    ├── tramites/
    ├── contacto.blade.php
    └── home.blade.php
```

## Optimización para Producción (cPanel)

Para un hosting compartido como cPanel sin SSR NodeJS, asegúrate de correr en tu entorno local antes de subir los archivos:

1. **Compilar Assets**: `npm run build`
2. El enrutamiento y caché se pueden optimizar corriendo en el servidor por SSH o en las rutas:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```
3. Además, se han incluido Meta tags dinámicos, XML Sitemap en `/sitemap.xml`, atributos de *lazy loading* en las imágenes abstractas de las UI y validaciones CSRF. Todo el código de fuentes fue configurado en **UTF-8**.

## Resumen de Tareas Realizadas (*DONE*)
- [OK] Proyecto corre en local.
- [OK] No hay HTML duplicado (implementación de componentes de Header, Footer, Custom Card).
- [OK] Rutas funcionales dinámicas puras en Blade sin la terminación `.html`.
- [OK] Tailwind (A través de NPM con auto compilación de clases integradas).
- [OK] Livewire instalado y con templates placeholders.
- [OK] Assets compilados e imágenes vinculadas mediante comando global estático dinámico.
- [OK] Todo ha sido guardado en formato de texto estándar compatible con UTF-8.

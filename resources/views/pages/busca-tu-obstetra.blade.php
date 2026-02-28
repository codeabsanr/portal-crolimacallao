@extends('layouts.public-portal')

@section('title', 'Busca Tu Obstetra | CRO III Lima-Callao')
@section('meta_description', 'Buscador publico para consultar el perfil profesional de obstetras colegiadas y colegiados.')

@section('content')
<main class="md:h-screen md:overflow-hidden flex flex-col md:flex-row">
    <section class="relative w-full md:w-[64%] md:h-screen md:overflow-y-auto bg-background-light border-r border-slate-300/80">
        <div class="absolute inset-0 opacity-40 pointer-events-none" style="background-image: linear-gradient(#e4d4d9 1px, transparent 1px), linear-gradient(90deg, #e4d4d9 1px, transparent 1px); background-size: 44px 44px;"></div>

        <header class="relative z-10 border-b border-slate-300/80 bg-white/90 backdrop-blur px-6 lg:px-10 py-5">
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                    <div class="leading-tight">
                        <p class="text-2xl font-black tracking-tight text-secondary">CRO III LIMA-CALLAO</p>
                        <p class="text-xs uppercase tracking-[0.18em] text-text-main">Sistema de Gestion Institucional</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <a href="{{ route('bolsa.trabajo') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">Bolsa de trabajo</a>
                    <a href="{{ route('login') }}" class="inst-btn-secondary !px-4 !py-2 !text-xs">Acceso colegiados</a>
                </div>
            </div>
        </header>

        <div class="relative z-10 mx-auto w-full max-w-5xl px-5 sm:px-6 lg:px-10 py-8 md:py-12">
            <span class="inline-flex items-center rounded-sm border border-primary/25 bg-brand-gold-soft px-3 py-1 text-xs font-bold uppercase tracking-[0.14em] text-primary">Busqueda publica</span>
            <h1 class="mt-5 text-4xl lg:text-5xl font-black leading-[1.06] tracking-tight text-secondary">Busca tu obstetra</h1>
            <p class="mt-4 max-w-3xl text-base md:text-lg text-text-main">Consulta por COP, DNI o nombre completo y revisa el perfil profesional en segundos.</p>

            <form id="buscador-obstetra-form" class="mt-8 rounded-md border border-primary/35 bg-white p-2">
                <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                    <label for="buscador-obstetra-input" class="sr-only">Buscar obstetra</label>
                    <div class="flex items-center gap-3 px-3 sm:px-4 py-3 sm:py-0 w-full">
                        <span class="material-icons-outlined text-3xl text-text-main">search</span>
                        <input id="buscador-obstetra-input" type="text" class="w-full border-none bg-transparent text-xl sm:text-2xl font-medium tracking-wide text-secondary placeholder:text-text-main focus:ring-0" placeholder="Ejemplo: 12874, 43658791 o Maria Fernanda">
                    </div>
                    <button id="buscador-obstetra-submit" type="submit" class="inst-btn-primary !h-12 !min-w-[180px] !rounded-sm !px-6 !text-sm">Buscar perfil</button>
                </div>
            </form>

            <div class="mt-4 flex flex-wrap gap-2 text-xs">
                <button type="button" data-example="12874" class="search-example rounded-sm border border-slate-300 bg-white px-3 py-1.5 font-semibold text-text-main hover:border-primary hover:text-primary">COP: 12874</button>
                <button type="button" data-example="30951" class="search-example rounded-sm border border-slate-300 bg-white px-3 py-1.5 font-semibold text-text-main hover:border-primary hover:text-primary">COP: 30951</button>
                <button type="button" data-example="maria" class="search-example rounded-sm border border-slate-300 bg-white px-3 py-1.5 font-semibold text-text-main hover:border-primary hover:text-primary">Nombre: Maria</button>
            </div>

            <section class="mt-8 space-y-4">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-xl md:text-2xl font-black text-secondary">Resultados</h2>
                    <span id="buscador-count" class="text-xs uppercase tracking-[0.14em] text-text-main font-bold">2 perfiles</span>
                </div>

                <div id="buscador-resultados" class="grid gap-3"></div>
                <p id="buscador-vacio" class="hidden rounded-sm border border-primary/20 bg-white p-4 text-sm text-text-main">No se encontraron perfiles con ese termino. Intenta con COP, DNI o nombre.</p>
            </section>
        </div>
    </section>

    <aside class="relative w-full md:w-[36%] min-h-[460px] md:h-screen md:overflow-y-auto bg-inst-hero text-white">
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.9) 1px, transparent 0); background-size: 30px 30px;"></div>

        <div class="relative z-10 mx-auto flex h-full w-full max-w-xl flex-col justify-center px-6 sm:px-8 lg:px-10 py-8 lg:py-12">
            <div class="flex items-center gap-3 mb-5">
                <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Logo CRO III Lima-Callao" class="h-11 w-11 object-contain" />
                <p class="text-xs uppercase tracking-[0.16em] font-bold text-white/90">CRO III LIMA-CALLAO</p>
            </div>

            <h2 class="text-3xl lg:text-4xl font-black tracking-tight">Ayuda y consejos</h2>
            <p class="mt-3 text-base lg:text-lg text-white/85">Consulta rapida y clara para validar el perfil profesional.</p>

            <div class="mt-6 space-y-3">
                <article class="rounded-sm border border-brand-gold/40 bg-brand-gold-soft/15 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-brand-gold-light">Sugerencia</p>
                    <p class="mt-1 text-sm text-white/90">Si tienes COP, usa ese dato primero. Es la forma mas precisa de encontrar un perfil.</p>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Validacion</p>
                    <p class="mt-1 text-sm text-white/85">Revisa que nombre, COP y estado profesional correspondan a la misma persona.</p>
                </article>
                <article class="rounded-sm border border-white/20 bg-white/10 p-4">
                    <p class="text-xs uppercase tracking-[0.12em] font-bold text-white">Accion</p>
                    <p class="mt-1 text-sm text-white/85">Abre el perfil completo para ver especialidad, cursos y ponencias registradas.</p>
                    <a href="{{ route('bolsa.trabajo') }}" class="mt-3 inst-btn !w-full !bg-brand-gold !text-white !py-2.5 !text-xs hover:!bg-brand-gold-light">Ir a bolsa de trabajo</a>
                </article>
            </div>

            <div class="mt-6 rounded-sm border border-white/20 bg-white/10 p-4">
                <p class="text-sm font-bold text-white">Soporte tecnico institucional</p>
                <p class="mt-1 text-sm text-white/80">Lunes a viernes: 9:00 a. m. - 5:30 p. m.</p>
                <p class="text-sm text-white/80">Sabados: 9:00 a. m. - 12:00 m.</p>
                <p class="mt-1 text-sm text-white/80">tramitedocumentario@crolimacallao.org.pe</p>
                <p class="text-sm text-white/80">+51 982 520 891</p>
            </div>
        </div>
    </aside>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('buscador-obstetra-form');
        const input = document.getElementById('buscador-obstetra-input');
        const container = document.getElementById('buscador-resultados');
        const empty = document.getElementById('buscador-vacio');
        const count = document.getElementById('buscador-count');
        const exampleButtons = document.querySelectorAll('.search-example');
        const perfilBase = @json(route('obstetras.perfil', ['cop' => '__COP__']));

        const data = [
            {
                nombre: 'Obst. Maria Fernanda Quispe Ramirez',
                cop: '12874',
                dni: '43658791',
                situacion: 'Activo',
                habilitado: 'HABILITADO',
                especialidad: 'Salud Materno Perinatal',
                foto: 'https://i.pravatar.cc/260?img=47'
            },
            {
                nombre: 'Obst. Ana Lucia Ramos Gutierrez',
                cop: '30951',
                dni: '71893254',
                situacion: 'No activo',
                habilitado: 'NO HABILITADO',
                especialidad: 'Gestion de Servicios de Salud',
                foto: 'https://i.pravatar.cc/260?img=5'
            }
        ];

        const render = function (items) {
            container.innerHTML = '';
            count.textContent = `${items.length} perfil${items.length === 1 ? '' : 'es'}`;
            empty.classList.toggle('hidden', items.length > 0);

            items.forEach(function (item) {
                const statusClass = item.habilitado === 'HABILITADO' ? 'text-emerald-700 bg-emerald-50 border-emerald-200' : 'text-primary bg-primary/5 border-primary/25';
                const profileUrl = perfilBase.replace('__COP__', item.cop);

                container.insertAdjacentHTML('beforeend', `
                    <article class="inst-card border border-primary/20 bg-white p-4">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                            <img src="${item.foto}" alt="Foto de perfil" class="h-20 w-20 object-cover border border-primary/20">
                            <div class="min-w-0 flex-1">
                                <h3 class="text-2xl font-black text-secondary leading-tight">${item.nombre}</h3>
                                <p class="mt-1 text-sm text-text-main">COP ${item.cop} · DNI ${item.dni}</p>
                                <p class="text-sm text-text-main">${item.especialidad}</p>
                            </div>
                            <div class="flex flex-col items-start sm:items-end gap-2">
                                <span class="inline-flex items-center rounded-sm border px-3 py-1 text-xs font-bold uppercase tracking-[0.12em] ${statusClass}">${item.habilitado}</span>
                                <span class="text-xs uppercase tracking-[0.12em] text-text-main font-bold">${item.situacion}</span>
                                <a href="${profileUrl}" class="inst-btn-secondary !px-4 !py-2 !text-xs">Ver perfil completo</a>
                            </div>
                        </div>
                    </article>
                `);
            });
        };

        const runSearch = function () {
            const term = (input.value || '').trim().toLowerCase();
            if (!term) {
                render(data);
                return;
            }

            const filtered = data.filter(function (item) {
                return item.nombre.toLowerCase().includes(term) || item.cop.includes(term) || item.dni.includes(term);
            });
            render(filtered);
        };

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            runSearch();
        });

        exampleButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                input.value = button.dataset.example || '';
                runSearch();
            });
        });

        render(data);
    });
</script>
@endsection





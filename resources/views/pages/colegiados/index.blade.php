@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-card title="Busca obstetra" icon="person_search" description="Verifica estado y habilitación profesional." link="{{ url('colegiados/buscador') }}" linkText="Consultar" />
                    <x-card title="Listados oficiales" icon="format_list_bulleted" description="Padrones institucionales por categoría y vigencia." link="{{ url('colegiados/listados') }}" linkText="Ver listados" />
                    <x-card title="Guía de uso" icon="menu_book" description="Manual y recomendaciones para navegar el portal." link="{{ url('colegiados/guia') }}" linkText="Abrir guía" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-5 gap-6">
                    <div class="lg:col-span-3 inst-card p-8 border-t-4 border-primary">
                        <h2 class="inst-section-title mb-4">Uso recomendado del módulo</h2>
                        <ol class="space-y-3 text-slate-700">
                            <li><strong>1.</strong> Ingrese DNI o número de colegiatura.</li>
                            <li><strong>2.</strong> Verifique nombre completo y estado de habilitación.</li>
                            <li><strong>3.</strong> Descargue constancias cuando estén disponibles.</li>
                            <li><strong>4.</strong> Si detecta inconsistencias, repórtelas por contacto oficial.</li>
                        </ol>
                    </div>
                    <aside class="lg:col-span-2 inst-card p-8 bg-primary text-white border-primary">
                        <h3 class="text-white text-2xl font-black mb-3">Soporte a colegiados</h3>
                        <p class="text-white/90 mb-5">Atención para regularización de datos y validación de perfil.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft w-full">Solicitar soporte</a>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection


@extends('layouts.app')

@section('content')
    <main id="main">
        <section class="py-10 md:py-14 bg-background-light">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <x-card title="Noticias" icon="newspaper"
                        description="Mantente informado sobre comunicados, acuerdos y novedades del colegio."
                        link="{{ url('actualidad/noticias') }}" linkText="Ver noticias" />

                    <x-card id="eventos" title="Eventos y calendario" icon="calendar_month"
                        description="Consulta webinars, jornadas académicas, asambleas y actividades institucionales."
                        link="{{ url('actualidad/eventos') }}" linkText="Ver calendario" />

                    <x-card title="Comunicados" icon="campaign"
                        description="Accede a pronunciamientos oficiales y avisos relevantes para colegiados."
                        link="{{ url('actualidad/comunicados') }}" linkText="Ver comunicados" />
                </div>
            </div>
        </section>

        <section class="py-10 md:py-14 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 inst-card p-8">
                        <h2 class="inst-section-title mb-4">Últimas publicaciones</h2>
                        @livewire('listado-noticias', ['limit' => 3])
                    </div>
                    <aside class="inst-card p-8 bg-primary text-white border-primary">
                        <h3 class="text-white text-2xl font-black mb-3">Difusión oficial</h3>
                        <p class="text-white/90 mb-5">Mantén actualizada tu información y revisa frecuentemente nuestros anuncios institucionales.</p>
                        <a href="{{ route('contacto') }}" class="inst-btn !bg-white !text-primary hover:!bg-brand-gold-soft w-full">Contactar comunicaciones</a>
                    </aside>
                </div>
            </div>
        </section>
    </main>
@endsection


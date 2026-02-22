@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="inst-card p-6 md:p-8 border-t-4 border-primary">
                <h2 class="inst-section-title mb-5">Pasos recomendados</h2>
                <ol class="space-y-4 text-slate-700">
                    <li class="flex gap-3"><span class="h-7 w-7 bg-primary text-white text-sm font-bold flex items-center justify-center">1</span><span>Use el buscador del inicio para ubicar su tramite.</span></li>
                    <li class="flex gap-3"><span class="h-7 w-7 bg-primary text-white text-sm font-bold flex items-center justify-center">2</span><span>Revise requisitos y plazos antes de enviar documentacion.</span></li>
                    <li class="flex gap-3"><span class="h-7 w-7 bg-primary text-white text-sm font-bold flex items-center justify-center">3</span><span>Guarde su codigo de seguimiento y consulte estado en contacto.</span></li>
                </ol>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('tramites') }}" class="inst-btn-primary">Ir a tramites</a>
                    <a href="{{ route('contacto') }}" class="inst-btn-secondary">Solicitar apoyo</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


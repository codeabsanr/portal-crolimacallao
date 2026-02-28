@extends('layouts.app')

@section('content')
    <x-institucional-page-shell
        eyebrow="Institucional"
        title="Simbolos Institucionales"
        summary="Informacion oficial sobre simbolos representativos del Colegio de Obstetras del Peru, segun estatuto y resoluciones vigentes.">

        <article class="inst-card p-6 md:p-8 border-primary/30 bg-[linear-gradient(180deg,#fff_0%,#f8f0f3_100%)]">
            <div class="flex flex-wrap items-end justify-between gap-3 mb-5">
                <h2 class="text-2xl font-black text-slate-900 inline-flex items-center gap-2"><span class="material-icons-outlined text-primary">workspace_premium</span>Simbolos representativos</h2>
                <span class="text-xs uppercase tracking-[0.16em] text-primary font-bold">Informacion institucional</span>
            </div>

            <p class="text-slate-700">Segun el Estatuto del Colegio de Obstetras del Peru adecuado a la Ley N. 28686.</p>

            <div class="mt-4 border-l-2 border-primary pl-4">
                <p class="text-sm text-slate-800"><strong>Articulo 8.</strong> El Colegio de Obstetras del Peru reconoce como simbolos representativos de la profesion e institucion: el Emblema, la Insignia, el Himno y el Uniforme Oficial. Las caracteristicas y especificaciones de cada uno quedan senaladas en el Reglamento.</p>
            </div>

            <div class="mt-5 inst-card p-4 bg-white border-primary/20">
                <p class="text-sm text-slate-700"><strong>Referencia:</strong> Ver Resolucion de Consejo Directivo Nacional N. 068-2017/CDN/COP.</p>
                <a href="{{ asset('assets/institucional/simbolos/resolucion-068-2017-cdn-cop.pdf') }}" class="inst-btn-primary mt-3 !py-2 !px-4 !text-xs">Clic aqui</a>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 border-primary/25">
            <div class="flex items-center justify-between gap-3">
                <h3 class="text-2xl font-black text-slate-900 inline-flex items-center gap-2"><span class="material-icons-outlined text-primary">shield</span>El emblema</h3>
                <span class="text-[11px] uppercase tracking-[0.14em] font-bold text-primary bg-primary/10 px-2 py-1">Articulo 9-12</span>
            </div>

            <div class="grid lg:grid-cols-[1fr_1.2fr] gap-5 mt-4">
                <figure class="border border-slate-200 bg-[linear-gradient(180deg,#ffffff_0%,#f8f0f3_100%)] p-5">
                    <img src="{{ asset('assets/img/logo-circular.png') }}" alt="Emblema institucional" class="h-36 w-36 object-contain mx-auto" />
                    <figcaption class="text-sm text-slate-700 text-center mt-3">Emblema institucional</figcaption>
                </figure>

                <div class="space-y-3 text-sm text-slate-700">
                    <p><strong>Articulo 9.</strong> El emblema se representa en el TUMI e incorpora al centro el Caduceo; a los extremos el Decreto Ley N. 21210, la Ley N. 23646 y la Ley N. 28686; y en la parte inferior la denominacion del Colegio de Obstetras del Peru.</p>
                    <p><strong>Articulo 10.</strong> El Emblema es registrado por el Colegio de Obstetras del Peru, con derechos reservados para su reproduccion.</p>
                    <p><strong>Articulo 11.</strong> El Emblema forma parte de la Insignia oficial del colegiado, estandartes, banderolas, membretes, documentos oficiales y otros que se requieran.</p>
                    <p><strong>Articulo 12.</strong> Los miembros directivos usan medalla con el emblema institucional y cinta color guinda en actos oficiales del Colegio y otros.</p>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 border-primary/25 bg-[linear-gradient(180deg,#fff_0%,#f9f1f4_100%)]">
            <div class="flex items-center justify-between gap-3">
                <h3 class="text-2xl font-black text-slate-900 inline-flex items-center gap-2"><span class="material-icons-outlined text-primary">military_tech</span>La insignia</h3>
                <span class="text-[11px] uppercase tracking-[0.14em] font-bold text-primary bg-primary/10 px-2 py-1">Articulo 13</span>
            </div>
            <p class="text-sm text-slate-700 mt-3"><strong>Articulo 13.</strong> La Insignia es el distintivo honorifico del colegiado y es de uso obligatorio.</p>

            <div class="grid md:grid-cols-3 gap-3 mt-5">
                <div class="relative aspect-square border border-slate-200 bg-primary-mist">
                    <img src="{{ asset('assets/institucional/simbolos/insignia-frente.jpg') }}" alt="Insignia frente" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                    <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para insignia frente</p></div>
                </div>
                <div class="relative aspect-square border border-slate-200 bg-primary-mist">
                    <img src="{{ asset('assets/institucional/simbolos/solapero.jpg') }}" alt="Solapero" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                    <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para solapero</p></div>
                </div>
                <div class="relative aspect-square border border-slate-200 bg-primary-mist">
                    <img src="{{ asset('assets/institucional/simbolos/carnet.jpg') }}" alt="Carnet institucional" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                    <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para carnet</p></div>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 border-primary/25">
            <h3 class="text-2xl font-black text-slate-900 inline-flex items-center gap-2"><span class="material-icons-outlined text-primary">music_note</span>El himno</h3>
            <p class="text-sm text-slate-700 mt-3">El Himno integra los simbolos representativos institucionales conforme al Articulo 8 del Estatuto.</p>

            <div class="grid lg:grid-cols-[1fr_1fr] gap-4 mt-5">
                <div class="relative aspect-[16/8] border border-slate-200 bg-primary-mist">
                    <img src="{{ asset('assets/institucional/simbolos/himno-acto-oficial.jpg') }}" alt="Interpretacion del himno" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                    <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para foto de interpretacion del himno</p></div>
                </div>
                <div class="inst-card p-4 bg-[linear-gradient(180deg,#ffffff_0%,#f8f0f3_100%)] border-slate-200">
                    <p class="text-sm text-slate-700">Contenido recomendado para publicacion oficial:</p>
                    <ul class="mt-2 list-disc pl-4 text-sm text-slate-700 space-y-1">
                        <li>Letra oficial completa.</li>
                        <li>Audio institucional.</li>
                        <li>Partitura o archivo de referencia.</li>
                    </ul>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <a href="{{ asset('assets/institucional/simbolos/himno-letra.pdf') }}" class="inst-btn-secondary !py-2 !px-3 !text-xs">Letra PDF</a>
                        <a href="{{ asset('assets/institucional/simbolos/himno.mp3') }}" class="inst-btn-secondary !py-2 !px-3 !text-xs">Audio MP3</a>
                        <a href="{{ asset('assets/institucional/simbolos/himno-partitura.pdf') }}" class="inst-btn-secondary !py-2 !px-3 !text-xs">Partitura</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 border-primary/25 bg-[linear-gradient(180deg,#fff_0%,#f7f2f4_100%)]">
            <div class="flex items-center justify-between gap-3">
                <h3 class="text-2xl font-black text-slate-900 inline-flex items-center gap-2"><span class="material-icons-outlined text-primary">checkroom</span>El uniforme oficial</h3>
                <span class="text-[11px] uppercase tracking-[0.14em] font-bold text-primary bg-primary/10 px-2 py-1">Articulo 15</span>
            </div>
            <div class="mt-3 border-l-2 border-primary pl-4">
                <p class="text-sm text-slate-800"><strong>Articulo 15.</strong> El Colegio de Obstetras del Peru establece el uso del Uniforme Oficial de color blanco y guinda con predominio del primero sobre el segundo, conforme al Reglamento: saco blanco, blusa guinda, falda blanca y zapatos color guinda.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mt-5">
                <figure class="border border-slate-200 bg-primary-mist p-4">
                    <div class="relative aspect-[3/4] border border-slate-200 bg-white">
                        <img src="{{ asset('assets/institucional/simbolos/uniforme-mujer.jpg') }}" alt="Mujer con uniforme oficial" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                        <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para uniforme mujer</p></div>
                    </div>
                    <figcaption class="text-sm text-slate-700 mt-3 text-center">Mujer con uniforme</figcaption>
                </figure>

                <figure class="border border-slate-200 bg-primary-mist p-4">
                    <div class="relative aspect-[3/4] border border-slate-200 bg-white">
                        <img src="{{ asset('assets/institucional/simbolos/uniforme-hombre.jpg') }}" alt="Hombre con uniforme oficial" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                        <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para uniforme hombre</p></div>
                    </div>
                    <figcaption class="text-sm text-slate-700 mt-3 text-center">Hombre con uniforme</figcaption>
                </figure>
            </div>
        </article>

        <article class="inst-card p-6 md:p-8 bg-[linear-gradient(180deg,#4d0213_0%,#5b0f27_100%)] border-secondary text-white">
            <h3 class="text-xl font-black text-white mb-2 inline-flex items-center gap-2"><span class="material-icons-outlined text-brand-gold-light">inventory_2</span>Otros elementos institucionales</h3>
            <p class="text-sm text-white/80 mb-4">Elementos complementarios de identificacion, protocolo y representacion institucional.</p>
            <div class="grid lg:grid-cols-3 gap-4">
                <article class="inst-card p-4 bg-white border-t-2 border-t-brand-gold">
                    <div class="relative aspect-[16/10] border border-slate-200 bg-primary-mist">
                        <img src="{{ asset('assets/institucional/simbolos/estandarte.jpg') }}" alt="Estandarte institucional" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                        <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para estandarte</p></div>
                    </div>
                    <h4 class="font-black text-slate-900 mt-3">Estandarte</h4>
                    <p class="text-sm text-slate-700 mt-2"><strong>Definicion:</strong> Insignia textil de representacion institucional utilizada en ceremonias, desfiles protocolares y actos solemnes del Colegio.</p>
                    <p class="text-xs text-slate-500 mt-2">Uso: actos oficiales, sesiones solemnes y actividades de representacion.</p>
                </article>

                <article class="inst-card p-4 bg-white border-t-2 border-t-brand-gold">
                    <div class="relative aspect-[16/10] border border-slate-200 bg-primary-mist">
                        <img src="{{ asset('assets/institucional/simbolos/solapero.jpg') }}" alt="Solapero institucional" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                        <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para solapero</p></div>
                    </div>
                    <h4 class="font-black text-slate-900 mt-3">Solapero</h4>
                    <p class="text-sm text-slate-700 mt-2"><strong>Definicion:</strong> Distintivo metalico institucional de uso personal que identifica la pertenencia colegial y la representacion protocolar del miembro.</p>
                    <p class="text-xs text-slate-500 mt-2">Uso: uniforme, traje formal y actividades institucionales autorizadas.</p>
                </article>

                <article class="inst-card p-4 bg-white border-t-2 border-t-brand-gold">
                    <div class="relative aspect-[16/10] border border-slate-200 bg-primary-mist">
                        <img src="{{ asset('assets/institucional/simbolos/carnet.jpg') }}" alt="Carnet institucional" class="h-full w-full object-cover" loading="lazy" onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');">
                        <div class="hidden absolute inset-0 flex items-center justify-center text-slate-500 text-center p-2"><p class="text-[11px] uppercase tracking-[0.12em]">Espacio para carnet</p></div>
                    </div>
                    <h4 class="font-black text-slate-900 mt-3">Carnet</h4>
                    <p class="text-sm text-slate-700 mt-2"><strong>Definicion:</strong> Documento oficial de identificacion del colegiado que acredita su registro institucional y condicion habil de ejercicio profesional.</p>
                    <p class="text-xs text-slate-500 mt-2">Uso: acreditacion en tramites, actos institucionales y verificaciones administrativas.</p>
                </article>
            </div>
        </article>

    </x-institucional-page-shell>
@endsection




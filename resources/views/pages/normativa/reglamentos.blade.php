@extends('layouts.app')

@section('content')
<main id="main">
    <section class="py-10 md:py-14 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-card title="Reglamento general" icon="gavel" description="Disposiciones administrativas generales de la orden profesional." link="{{ route('normativa') }}" linkText="Ver base normativa" />
                <x-card title="Reglamento de disciplina" icon="rule" description="Lineamientos de conducta, faltas y procedimientos institucionales." link="{{ route('normativa') }}" linkText="Ver base normativa" />
            </div>
        </div>
    </section>
</main>
@endsection


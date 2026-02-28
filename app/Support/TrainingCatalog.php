<?php

namespace App\Support;

use Carbon\Carbon;

class TrainingCatalog
{
    private const MONTHS_ES = [
        1 => 'enero',
        2 => 'febrero',
        3 => 'marzo',
        4 => 'abril',
        5 => 'mayo',
        6 => 'junio',
        7 => 'julio',
        8 => 'agosto',
        9 => 'septiembre',
        10 => 'octubre',
        11 => 'noviembre',
        12 => 'diciembre',
    ];

    public static function all(): array
    {
        $today = Carbon::today();

        return collect(self::basePrograms())
            ->map(function (array $program, string $slug) use ($today): array {
                $startAt = Carbon::parse($program['start_at']);
                $endAt = Carbon::parse($program['end_at']);
                $enrollmentStartAt = Carbon::parse($program['enrollment_start_at']);
                $enrollmentEndAt = Carbon::parse($program['enrollment_end_at']);

                $isArchived = ($program['status'] ?? 'published') === 'archived' || $today->gt($endAt);
                $isEnrollmentOpen = !$isArchived && $today->betweenIncluded($enrollmentStartAt, $enrollmentEndAt);
                $isInProgress = !$isArchived && $today->betweenIncluded($startAt, $endAt);
                $isUpcoming = !$isArchived && $today->lt($startAt);

                $program['slug'] = $slug;
                $program['start_date'] = self::formatDate($startAt);
                $program['end_date'] = self::formatDate($endAt);
                $program['month_label'] = self::formatMonthYear($startAt);
                $program['year'] = (int) $startAt->format('Y');
                $program['is_archived'] = $isArchived;
                $program['is_current'] = !$isArchived;
                $program['is_enrollment_open'] = $isEnrollmentOpen;
                $program['is_in_progress'] = $isInProgress;
                $program['is_upcoming'] = $isUpcoming;
                $program['status_label'] = self::statusLabel($isArchived, $isEnrollmentOpen, $isInProgress, $isUpcoming);

                return $program;
            })
            ->values()
            ->all();
    }

    public static function current(?string $kind = null): array
    {
        return collect(self::all())
            ->filter(fn(array $program) => $program['is_current'])
            ->when($kind !== null, fn($q) => $q->where('kind', $kind))
            ->sortBy('start_at')
            ->values()
            ->all();
    }

    public static function archived(?string $kind = null): array
    {
        return collect(self::all())
            ->filter(fn(array $program) => $program['is_archived'])
            ->when($kind !== null, fn($q) => $q->where('kind', $kind))
            ->sortByDesc('start_at')
            ->values()
            ->all();
    }

    public static function featuredCurrent(int $limit = 3): array
    {
        $current = collect(self::current())
            ->filter(fn(array $program) => !empty($program['featured']))
            ->take($limit)
            ->values();

        if ($current->count() < $limit) {
            $missing = $limit - $current->count();
            $fallback = collect(self::current())
                ->reject(fn(array $program) => $current->contains('slug', $program['slug']))
                ->take($missing);

            $current = $current->concat($fallback);
        }

        return $current->values()->all();
    }

    public static function calendarCurrent(): array
    {
        return collect(self::current())
            ->sortBy('start_at')
            ->map(fn(array $program) => [
                'mes' => $program['month_label'],
                'actividad' => $program['title'],
                'vacantes' => $program['seats'],
                'slug' => $program['slug'],
                'kind' => $program['kind'],
                'status_label' => $program['status_label'],
            ])
            ->values()
            ->all();
    }

    public static function find(string $slug): ?array
    {
        return collect(self::all())->firstWhere('slug', $slug);
    }

    private static function statusLabel(bool $isArchived, bool $isEnrollmentOpen, bool $isInProgress, bool $isUpcoming): string
    {
        if ($isArchived) {
            return 'Finalizado';
        }

        if ($isInProgress) {
            return 'En curso';
        }

        if ($isEnrollmentOpen) {
            return 'Inscripciones abiertas';
        }

        if ($isUpcoming) {
            return 'Próximamente';
        }

        return 'Publicado';
    }

    private static function formatDate(Carbon $date): string
    {
        return sprintf('%d de %s de %d', (int) $date->format('d'), self::MONTHS_ES[(int) $date->format('n')], (int) $date->format('Y'));
    }

    private static function formatMonthYear(Carbon $date): string
    {
        return ucfirst(self::MONTHS_ES[(int) $date->format('n')]) . ' ' . $date->format('Y');
    }

    private static function basePrograms(): array
    {
        return [
            'diplomado-emergencias-obstetricas-criticas-2026' => [
                'kind' => 'Curso',
                'featured' => true,
                'title' => 'Diplomado en Emergencias Obstetricas Criticas 2026',
                'code' => 'CAP-OBS-2601',
                'summary' => 'Entrenamiento intensivo para respuesta clinica en hemorragias, preeclampsia severa y sepsis obstetrica.',
                'duration' => '120 horas',
                'modality' => 'Hibrido',
                'start_at' => '2026-04-14',
                'end_at' => '2026-07-15',
                'enrollment_start_at' => '2026-02-10',
                'enrollment_end_at' => '2026-04-13',
                'seats' => 45,
                'price' => 'S/ 690',
                'regular_price' => 'S/ 920',
                'audience' => 'Obstetras colegiadas, internas y profesionales en salud materna.',
                'flyer' => asset('assets/img/ads/ads_04.jpeg'),
                'status' => 'published',
                'outcomes' => [
                    'Protocolos de emergencia con simulacion de casos reales.',
                    'Toma de decisiones clinicas en escenarios de alto riesgo.',
                    'Certificacion institucional con validacion academica.',
                ],
                'syllabus' => [
                    'Modulo 1: triage obstetrico avanzado.',
                    'Modulo 2: hemorragia obstetrica y shock.',
                    'Modulo 3: trastornos hipertensivos severos.',
                    'Modulo 4: manejo de sepsis y traslado oportuno.',
                ],
            ],
            'curso-salud-sexual-reproductiva-basada-evidencia-2026' => [
                'kind' => 'Curso',
                'featured' => true,
                'title' => 'Curso de Salud Sexual y Reproductiva Basada en Evidencia',
                'code' => 'CAP-OBS-2602',
                'summary' => 'Actualizacion normativa y practica para consejeria, prevencion y atencion integral en salud sexual y reproductiva.',
                'duration' => '72 horas',
                'modality' => 'Virtual en vivo',
                'start_at' => '2026-05-11',
                'end_at' => '2026-06-20',
                'enrollment_start_at' => '2026-03-01',
                'enrollment_end_at' => '2026-05-10',
                'seats' => 70,
                'price' => 'S/ 420',
                'regular_price' => 'S/ 560',
                'audience' => 'Obstetras y personal de primer nivel de atencion.',
                'flyer' => asset('assets/img/ads/ads_02.jpeg'),
                'status' => 'published',
                'outcomes' => [
                    'Aplicacion de guias clinicas vigentes.',
                    'Manejo de consejeria con enfoque de derechos.',
                    'Diseno de planes de mejora para servicios locales.',
                ],
                'syllabus' => [
                    'Modulo 1: lineamientos MINSA y marco legal.',
                    'Modulo 2: atencion integral por curso de vida.',
                    'Modulo 3: consejeria y adherencia terapeutica.',
                    'Modulo 4: indicadores de calidad y seguimiento.',
                ],
            ],
            'taller-investigacion-clinica-obstetrica-2026' => [
                'kind' => 'Curso',
                'featured' => false,
                'title' => 'Taller de Investigacion Clinica Obstetrica',
                'code' => 'CAP-OBS-2603',
                'summary' => 'Programa practico para formular proyectos, analizar datos y publicar resultados aplicados a obstetricia.',
                'duration' => '48 horas',
                'modality' => 'Virtual',
                'start_at' => '2026-06-02',
                'end_at' => '2026-06-30',
                'enrollment_start_at' => '2026-03-15',
                'enrollment_end_at' => '2026-06-01',
                'seats' => 55,
                'price' => 'S/ 350',
                'regular_price' => 'S/ 490',
                'audience' => 'Obstetras interesadas en investigacion y docencia.',
                'flyer' => null,
                'status' => 'published',
                'outcomes' => [
                    'Estructura de protocolo y ficha etica.',
                    'Analisis de resultados para presentacion academica.',
                    'Plantillas listas para articulo cientifico.',
                ],
                'syllabus' => [
                    'Modulo 1: pregunta clinica y objetivos.',
                    'Modulo 2: metodologia y variables.',
                    'Modulo 3: analisis estadistico aplicado.',
                    'Modulo 4: redaccion y divulgacion.',
                ],
            ],
            'congreso-obstetricia-perinatal-innovacion-2026' => [
                'kind' => 'Conferencia',
                'featured' => true,
                'title' => 'Congreso de Obstetricia Perinatal e Innovacion 2026',
                'code' => 'CON-OBS-2601',
                'summary' => 'Encuentro cientifico para actualizar practicas y tendencias en salud materna, perinatal y gestion de servicios.',
                'duration' => '3 dias',
                'modality' => 'Presencial',
                'start_at' => '2026-08-22',
                'end_at' => '2026-08-24',
                'enrollment_start_at' => '2026-04-15',
                'enrollment_end_at' => '2026-08-20',
                'seats' => 280,
                'price' => 'S/ 290',
                'regular_price' => 'S/ 390',
                'audience' => 'Obstetras, docentes, investigadoras y coordinadoras de servicio.',
                'flyer' => asset('assets/img/ads/ads_05.jpeg'),
                'status' => 'published',
                'outcomes' => [
                    'Ponencias magistrales con especialistas nacionales e internacionales.',
                    'Mesas de casos con enfoque de decision clinica.',
                    'Networking con instituciones formadoras y servicios de salud.',
                ],
                'syllabus' => [
                    'Eje 1: cuidado materno perinatal de alto impacto.',
                    'Eje 2: tecnologia y seguridad del paciente.',
                    'Eje 3: liderazgo obstetrico y gestion de calidad.',
                    'Eje 4: investigacion aplicada en servicios.',
                ],
            ],
            'diplomado-gestion-perinatal-integral-2025' => [
                'kind' => 'Curso',
                'featured' => false,
                'title' => 'Diplomado en Gestion Perinatal Integral 2025',
                'code' => 'CAP-OBS-2505',
                'summary' => 'Programa de fortalecimiento para coordinacion de servicios materno perinatales.',
                'duration' => '96 horas',
                'modality' => 'Hibrido',
                'start_at' => '2025-05-05',
                'end_at' => '2025-07-21',
                'enrollment_start_at' => '2025-02-10',
                'enrollment_end_at' => '2025-04-30',
                'seats' => 52,
                'price' => 'S/ 620',
                'regular_price' => 'S/ 820',
                'audience' => 'Obstetras responsables de servicios de salud.',
                'flyer' => null,
                'status' => 'archived',
                'outcomes' => [
                    'Implementacion de tableros de seguimiento materno.',
                    'Gestion de riesgos en atencion perinatal.',
                ],
                'syllabus' => [
                    'Modulo 1: planeamiento de servicios.',
                    'Modulo 2: indicadores de resultado.',
                ],
            ],
            'jornada-actualizacion-materna-2025' => [
                'kind' => 'Conferencia',
                'featured' => false,
                'title' => 'Jornada de Actualizacion Materna 2025',
                'code' => 'CON-OBS-2503',
                'summary' => 'Jornada nacional orientada a estandares de seguridad materna en establecimientos de salud.',
                'duration' => '2 dias',
                'modality' => 'Virtual',
                'start_at' => '2025-10-18',
                'end_at' => '2025-10-19',
                'enrollment_start_at' => '2025-07-01',
                'enrollment_end_at' => '2025-10-12',
                'seats' => 320,
                'price' => 'S/ 190',
                'regular_price' => 'S/ 260',
                'audience' => 'Obstetras, docentes y equipos de gestion.',
                'flyer' => null,
                'status' => 'archived',
                'outcomes' => [
                    'Actualizacion de protocolos de seguridad materna.',
                    'Intercambio de experiencias de gestion regional.',
                ],
                'syllabus' => [
                    'Bloque 1: seguridad del paciente obstetrico.',
                    'Bloque 2: innovacion en procesos asistenciales.',
                ],
            ],
        ];
    }
}

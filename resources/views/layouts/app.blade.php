<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{
        fontSize: localStorage.getItem('fontSize') || 'base',
        increaseFont() {
            this.fontSize = this.fontSize === 'base' ? 'large' : (this.fontSize === 'large' ? 'xlarge' : 'base');
            localStorage.setItem('fontSize', this.fontSize);
        }
    }" :class="{ 'a11y-text-1': fontSize === 'large', 'a11y-text-2': fontSize === 'xlarge' }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="@yield('meta_description', 'Portal Oficial del Colegio Regional de Obstetras III Lima-Callao')">
    <meta name="keywords" content="@yield('meta_keywords', 'obstetras, colegio regional, lima, callao, salud')">
    <meta name="author" content="CRO III Lima-Callao">
    @yield('meta')

    <title>{{ config('app.name', 'Portal CRO Lima-Callao') }}</title>

    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased text-gray-900 bg-gray-50 flex flex-col min-h-screen">
    <x-navbar />

    <main class="flex-grow">
        <x-page-context-nav />
        <x-page-standard-hero />
        @yield('content')
        {{ $slot ?? '' }}
    </main>

    <x-footer />
    <x-help-floating-widget />

    @livewireScripts
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])

    <style>
        /* Personaliza el logo aquí */
        .navbar-brand {
            background: url('https://example.com/path-to-your-logo.png') no-repeat center center;
            background-size: contain;
            width: 100px; /* Ajusta el tamaño según sea necesario */
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <nav x-data="{ open: false }" class="bg-gray-800">
        <!-- ... -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Inicio') }}
            </x-nav-link>

            <x-nav-link :href="route('formulario')" :active="request()->routeIs('formulario')">
                {{ __('Formulario') }}
            </x-nav-link>

            <!-- ... -->
        </div>
        <!-- ... -->
    </nav>
</body>
</html>

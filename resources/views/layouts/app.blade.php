<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'THE MORGANS')</title>

    {{-- Prevent FOUC (Flash of Unstyled Content) for Dark Mode --}}
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    {{-- Vite Assets & Livewire Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    
    {{-- Navigation / Header --}}
    <livewire:header />

    {{-- Page Content --}}
    <main class="py-0">
        <div class="max-w-7xl mx-auto  ">
            {{ $slot ?? '' }} {{-- For Components --}}
            @yield('content')    {{-- For standard Blade views --}}
        </div>
    </main>

    {{-- Livewire Scripts (Includes Alpine.js) --}}
    @livewireScripts
</body>
</html>

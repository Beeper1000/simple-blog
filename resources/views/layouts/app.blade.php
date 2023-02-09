<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
            <header class="max-w-xl mx-auto mt-20 text-center">
                  
                        {{ $header }}
                    
                </header>
            @endif

            <!-- Page Content -->
            <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
                {{ $slot }}
            </main>

            @include('layouts.footer')
</section>
    </body>
</html>

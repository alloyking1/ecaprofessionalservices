<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-eca.svg') }}">
        <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

        @include('partials.seo', ['meta' => $meta ?? null])

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Montserrat:wght@600;700;800&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-surface text-ink antialiased overflow-x-hidden" :class="mobileMenuOpen ? 'overflow-hidden' : ''" x-data="siteUi()" @keydown.escape.window="closeMenus()">
        <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[70] focus:rounded-md focus:bg-primary focus:px-4 focus:py-2 focus:text-white">
            Skip to main content
        </a>

        <div class="scroll-meter" :style="`transform: scaleX(${Math.min((window.scrollY / Math.max(document.body.scrollHeight - window.innerHeight, 1)), 1)})`"></div>

        <x-navbar />

        <main id="main-content">
            @yield('content')
        </main>

        <x-footer />

        <button
            type="button"
            class="back-to-top"
            @click="scrollToTop()"
            x-show="scrolled"
            x-transition
            x-cloak
            aria-label="Back to top"
        >
            <span aria-hidden="true">↑</span>
        </button>
    </body>
</html>
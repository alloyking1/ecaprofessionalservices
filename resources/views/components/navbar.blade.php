<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/85 backdrop-blur-md transition" :class="scrolled ? 'shadow-md shadow-blue-900/5' : ''">
    <nav class="container-shell flex items-center justify-between py-4" aria-label="Main">
        <a href="{{ route('home') }}" class="max-w-[72%] font-heading text-base font-bold leading-tight tracking-tight text-primary sm:text-lg lg:max-w-none">
            ECA Professional Services
        </a>

        <button
            type="button"
            class="ml-3 inline-flex shrink-0 items-center rounded-md border border-slate-300 p-2 text-slate-700 lg:hidden"
            @click="mobileMenuOpen = !mobileMenuOpen"
            :aria-expanded="mobileMenuOpen.toString()"
            aria-controls="mobile-menu"
            aria-label="Toggle navigation"
        >
            <span class="sr-only">Open main menu</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 5A.75.75 0 012.75 9h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 9.75zm.75 5a.75.75 0 000 1.5h14.5a.75.75 0 000-1.5H2.75z" clip-rule="evenodd"/>
            </svg>
        </button>

        <div class="hidden items-center gap-6 lg:flex">
            @foreach ($site['navigation'] as $item)
                @if ($item['label'] === 'Blog / Insights')
                    @continue
                @endif

                @if ($item['label'] === 'Services')
                    <div class="relative" @mouseenter="servicesMenuOpen = true" @mouseleave="servicesMenuOpen = false">
                        <button type="button" class="inline-flex items-center gap-1 text-sm font-medium text-slate-700 transition hover:text-primary" :aria-expanded="servicesMenuOpen.toString()">
                            {{ $item['label'] }}
                            <span aria-hidden="true">▾</span>
                        </button>
                        <div x-show="servicesMenuOpen" x-transition class="absolute left-0 top-full mt-3 w-72 rounded-xl border border-slate-200 bg-white p-3 shadow-xl" x-cloak>
                            @foreach ($site['services']['overview'] as $service)
                                <a href="{{ route($service['route']) }}" class="block rounded-lg px-3 py-2 text-sm text-slate-600 transition hover:bg-slate-100 hover:text-primary">
                                    {{ $service['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ route($item['route']) }}" class="text-sm font-medium text-slate-700 transition hover:text-primary">
                        {{ $item['label'] }}
                    </a>
                @endif
            @endforeach

            <a href="{{ route('contact') }}" class="btn-primary text-sm">
                Book Consultation
            </a>
        </div>
    </nav>

    <div class="fixed inset-0 z-40 bg-slate-900/45 lg:hidden" x-show="mobileMenuOpen" x-transition.opacity @click="mobileMenuOpen = false" x-cloak></div>
    <aside
        id="mobile-menu"
        class="fixed inset-y-0 right-0 z-50 flex h-dvh w-full max-w-sm flex-col overflow-y-auto border-l border-slate-200 bg-white px-5 py-6 shadow-2xl lg:hidden sm:px-6"
        x-show="mobileMenuOpen"
        x-transition:enter="transition duration-300 ease-out"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition duration-200 ease-in"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        x-cloak
    >
        <div class="mb-6 flex items-center justify-between">
            <p class="font-heading text-base font-bold text-primary">Menu</p>
            <button type="button" class="rounded-md border border-slate-300 px-3 py-2 text-sm" @click="mobileMenuOpen = false" aria-label="Close menu">Close</button>
        </div>

        <div class="grid flex-1 content-start gap-1">
            @foreach ($site['navigation'] as $item)
                @if ($item['label'] === 'Blog / Insights')
                    @continue
                @endif

                <a href="{{ route($item['route']) }}" class="rounded-md px-3 py-3 text-sm font-medium text-slate-700 hover:bg-slate-100" @click="mobileMenuOpen = false">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        <a href="{{ route('contact') }}" class="btn-primary mt-6 w-full text-sm" @click="mobileMenuOpen = false">
            Book Consultation
        </a>
    </aside>
</header>
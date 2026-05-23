@props([
    'title',
    'subtitle' => null,
    'eyebrow' => null,
    'align' => 'left',
])

<section class="hero-shell">
    <div class="container-shell grid gap-10 lg:grid-cols-12 lg:items-center">
        <div class="lg:col-span-7 {{ $align === 'center' ? 'text-center lg:text-left' : '' }}">
            @if ($eyebrow)
                <p class="text-sm font-semibold uppercase tracking-[0.18em] text-primary">{{ $eyebrow }}</p>
            @endif

            <h1 class="mt-3 text-balance font-heading text-4xl font-extrabold tracking-tight text-slate-950 md:text-5xl">{{ $title }}</h1>

            @if ($subtitle)
                <p class="mt-4 max-w-3xl text-lg text-slate-600">{{ $subtitle }}</p>
            @endif

            @if (isset($actions))
                <div class="mt-8 flex flex-wrap gap-3">
                    {{ $actions }}
                </div>
            @endif

            @if (trim((string) $slot) !== '')
                <div class="mt-8">
                    {{ $slot }}
                </div>
            @endif
        </div>

        <div class="lg:col-span-5">
            @if (isset($media))
                {{ $media }}
            @else
                <div class="relative overflow-hidden rounded-3xl border border-blue-100 bg-gradient-to-br from-blue-50 to-white p-8 shadow-lg">
                    <p class="font-heading text-lg font-bold text-primary">Financial Clarity. Strategic Growth.</p>
                    <p class="mt-2 text-sm text-slate-600">Purpose-built accounting and advisory support for modern businesses in Nigeria.</p>
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-white p-4 shadow-sm">
                            <p class="text-xs uppercase tracking-wide text-slate-500">Compliance</p>
                            <p class="mt-1 font-semibold text-slate-900">Risk Managed</p>
                        </div>
                        <div class="rounded-xl bg-white p-4 shadow-sm">
                            <p class="text-xs uppercase tracking-wide text-slate-500">Advisory</p>
                            <p class="mt-1 font-semibold text-slate-900">Growth Focused</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
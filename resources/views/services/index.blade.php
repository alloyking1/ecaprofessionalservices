@extends('layouts.app')

@section('content')
    <x-hero
        eyebrow="Our Services"
        title="Comprehensive accounting, audit, tax, and advisory solutions"
        subtitle="Structured services built to improve compliance, decision quality, and sustainable business growth."
    >
        <x-slot:actions>
            <a href="{{ route('contact') }}" class="btn-primary">Book Consultation</a>
            <a href="{{ route('faq') }}" class="btn-outline">Read FAQs</a>
        </x-slot:actions>

        <x-slot:media>
            <div class="media-frame h-64 md:h-72">
                <img src="https://source.unsplash.com/1400x900/?african,business,office,discussion" alt="African corporate team in a professional office discussion">
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell">
        <div class="container-shell">
            <p class="section-kicker">All Services</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Choose the right support model for your business priorities</h2>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $item)
                <x-service-card
                    :title="$item['name']"
                    :icon="$item['icon'] ?? 'sparkles'"
                    description="Structured, practical, and compliance-ready support tailored to your business needs."
                    :href="route($item['route'])"
                />
            @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell">
            <p class="section-kicker">How We Work</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">A repeatable process for consistent delivery quality</h2>
            <div class="mt-8 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($site['process'] as $item)
                    <article class="card-shell">
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Step {{ $loop->iteration }}</p>
                        <h3 class="mt-2 font-heading text-xl font-bold text-slate-900">{{ $item['step'] }}</h3>
                        <p class="mt-3 text-sm text-slate-600">{{ $item['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell grid gap-8 lg:grid-cols-2">
            <div>
                <p class="section-kicker">Industries Served</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Sector-aware support for operational realities</h2>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ($site['industries'] as $industry)
                        <article class="card-shell py-4">
                            <h3 class="font-heading text-lg font-bold text-slate-900">{{ $industry }}</h3>
                            <p class="mt-2 text-sm text-slate-600">Specialized finance and compliance support aligned to your sector context.</p>
                        </article>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="section-kicker">Service FAQs</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Answers to common service and engagement questions</h2>
                <div class="mt-6 grid gap-3">
                    @foreach ($site['faq'] as $entry)
                        <x-faq-item :question="$entry['question']" :answer="$entry['answer']" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell">
            <x-cta
                title="Not sure which service mix is best for your organization?"
                description="Book a discovery consultation and we will recommend the right combination for your current priorities."
                buttonText="Speak with an Advisor"
                :buttonHref="route('contact')"
            >
                From one-off projects to ongoing support, we tailor engagement models to fit your operating goals and governance needs.
            </x-cta>
        </div>
    </section>
@endsection
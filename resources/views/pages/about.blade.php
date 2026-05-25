@extends('layouts.app')

@section('content')
    <x-hero
        eyebrow="About ECA"
        title="About ECA Professional Services"
        subtitle="We help ambitious Nigerian businesses improve financial performance, manage compliance, and build long-term resilience."
    >
        <x-slot:actions>
            <a href="{{ route('contact') }}" class="btn-primary">Book Consultation</a>
            <a href="{{ route('services.index') }}" class="btn-outline">Our Services</a>
        </x-slot:actions>

        <x-slot:media>
            <div class="media-frame h-64 md:h-72">
                <img src="https://source.unsplash.com/1400x900/?african,executives,boardroom" alt="African business leaders in a boardroom discussion">
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell">
        <div class="container-shell grid gap-6 lg:grid-cols-2">
            <article class="card-shell">
                <p class="section-kicker">Our Story</p>
                <p class="mt-4 text-slate-600">{{ $site['about']['story'] }}</p>
            </article>
            <article class="card-shell">
                <p class="section-kicker">Company Culture</p>
                <p class="mt-4 text-slate-600">We are a collaborative team of finance professionals who value ownership, continuous learning, and practical impact. Our culture is built on trust, responsiveness, and a commitment to helping clients operate with confidence.</p>
            </article>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell grid gap-6 lg:grid-cols-2">
            <article class="card-shell">
                <p class="section-kicker">Mission</p>
                <h2 class="mt-2 font-heading text-2xl font-bold text-slate-900">Why we exist</h2>
                <p class="mt-4 text-slate-600">{{ $site['about']['mission'] }}</p>
            </article>
            <article class="card-shell">
                <p class="section-kicker">Vision</p>
                <h2 class="mt-2 font-heading text-2xl font-bold text-slate-900">Where we are going</h2>
                <p class="mt-4 text-slate-600">{{ $site['about']['vision'] }}</p>
            </article>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell">
            <p class="section-kicker">Core Values</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Principles that define how we work</h2>
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                @foreach ($site['about']['values'] as $value)
                    <article class="card-shell">
                        <h3 class="font-heading text-xl font-bold text-slate-900">{{ $value['title'] }}</h3>
                        <p class="mt-3 text-sm text-slate-600">{{ $value['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell">
            <p class="section-kicker">Leadership Team</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Experienced professionals guiding every engagement</h2>
            <div class="mt-8 grid gap-4 md:grid-cols-3">
                @foreach ($site['teamPreview'] as $member)
                    <article class="card-shell">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-primary">
                            <x-icon name="briefcase" class="h-5 w-5" />
                        </div>
                        <h3 class="mt-4 font-heading text-xl font-bold text-slate-900">{{ $member['name'] }}</h3>
                        <p class="mt-1 text-sm font-semibold text-primary">{{ $member['role'] }}</p>
                        <p class="mt-3 text-sm text-slate-600">{{ $member['focus'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell grid gap-4 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($site['stats'] as $stat)
                <x-stats-counter :label="$stat['label']" :value="$stat['value']" :suffix="$stat['suffix']" />
            @endforeach
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell">
            <x-cta
                title="Work with a team that combines compliance rigor with business strategy"
                description="Talk to our experts about your reporting, tax, audit, and advisory priorities."
                buttonText="Schedule Consultation"
                :buttonHref="route('contact')"
            >
                We support leadership teams with practical insights, measurable execution, and trusted guidance.
            </x-cta>
        </div>
    </section>
@endsection
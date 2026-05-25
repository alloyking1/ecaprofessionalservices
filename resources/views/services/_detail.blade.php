@extends('layouts.app')

@section('content')
    <x-hero
        eyebrow="Service Detail"
        :title="$service['name']"
        :subtitle="$service['summary']"
    >
        <x-slot:actions>
            <a href="{{ route('contact') }}" class="btn-primary">Book Consultation</a>
            <a href="{{ route('services.index') }}" class="btn-outline">All Services</a>
        </x-slot:actions>

        <x-slot:media>
            <div class="media-frame h-64 md:h-80">
                <img src="{{ $service['heroImage'] }}" alt="{{ $service['name'] }} team at work">
                {{-- <img src="https://images.unsplash.com/photo-1626266061368-46a8f578ddd6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="{{ $service['name'] }} team at work"> --}}
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell">
        <div class="container-shell grid gap-8 lg:grid-cols-2">
            <div>
                <p class="section-kicker">Service Overview</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">A practical service model designed for results</h2>
                <p class="mt-4 text-slate-600">{{ $service['overview'] }}</p>
            </div>
            <div>
                <p class="section-kicker">Benefits</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Why clients choose this service</h2>
                <div class="mt-6 grid gap-3">
                    @foreach ($service['benefits'] as $benefit)
                        <article class="card-shell py-4">
                            <div class="flex items-start gap-3">
                                <span class="accent-dot mt-2"></span>
                                <p class="text-sm text-slate-700">{{ $benefit }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell">
            <p class="section-kicker">Our Process</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">A clear path from consultation to reporting</h2>
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
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Sector-aware expertise for practical outcomes</h2>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ($service['industries'] as $industry)
                        <article class="card-shell py-4">
                            <h3 class="font-heading text-lg font-bold text-slate-900">{{ $industry }}</h3>
                            <p class="mt-2 text-sm text-slate-600">Tailored execution models that fit your sector dynamics.</p>
                        </article>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="section-kicker">FAQs</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Common questions about {{ $service['name'] }}</h2>
                <div class="mt-6 grid gap-3">
                    @foreach ($service['faq'] as $entry)
                        <x-faq-item :question="$entry['question']" :answer="$entry['answer']" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell grid gap-8 lg:grid-cols-2">
            <div>
                <p class="section-kicker">Testimonials</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">How clients describe our delivery quality</h2>
                <div class="mt-6">
                    <x-testimonial-slider :items="$service['testimonials']" />
                </div>
            </div>
            <div>
                <p class="section-kicker">Related Services</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Complementary services you may need</h2>
                <div class="mt-6 grid gap-3">
                    @foreach ($service['related'] as $route)
                        @php
                            $relatedService = collect($site['services']['overview'])->firstWhere('route', $route);
                        @endphp
                        @if ($relatedService)
                            <x-service-card
                                :title="$relatedService['name']"
                                :icon="$relatedService['icon'] ?? 'sparkles'"
                                description="Combine this with your current service scope for broader business impact."
                                :href="route($relatedService['route'])"
                            />
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell grid gap-6 rounded-3xl border border-slate-200 bg-white p-8 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="section-kicker">Contact</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Need this service for your organization?</h2>
                <p class="mt-3 text-sm text-slate-600">Speak with our team to define scope, timeline, and expected outcomes.</p>
                <ul class="mt-4 space-y-1 text-sm text-slate-600">
                    <li>{{ $site['contact']['phone'] }}</li>
                    <li>{{ $site['contact']['email'] }}</li>
                    <li>{{ $site['contact']['hours'] }}</li>
                </ul>
            </div>
            <form class="grid gap-3" action="#" method="post">
                @csrf
                <label class="sr-only" for="service-name">Name</label>
                <input id="service-name" type="text" name="name" placeholder="Your name" class="rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                <label class="sr-only" for="service-email">Email</label>
                <input id="service-email" type="email" name="email" placeholder="Business email" class="rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                <label class="sr-only" for="service-message">Message</label>
                <textarea id="service-message" name="message" rows="4" placeholder="Tell us about your service requirement" class="rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none"></textarea>
                <button type="submit" class="btn-primary">Send Request</button>
            </form>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell">
            <x-cta
                title="Ready to strengthen your {{ strtolower($service['name']) }} function?"
                description="Book a consultation and get a focused execution plan from our specialists."
                buttonText="Book Consultation"
                :buttonHref="route('contact')"
            >
                We align scope, governance, and delivery cadence to your business priorities.
            </x-cta>
        </div>
    </section>
@endsection

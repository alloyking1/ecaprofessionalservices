@extends('layouts.app')

@section('content')
    @php
        $whyChooseUs = [
            'Professional expertise across accounting, tax, and audit disciplines.',
            'Compliance-focused processes aligned with Nigerian regulations.',
            'Trusted partnerships built on transparency and measurable outcomes.',
            'Tailored advisory strategies shaped by your business context.',
        ];
    @endphp

    <x-hero
        eyebrow="ECA Professional Services"
        title="Professional Accounting, Audit & Tax Solutions for Businesses in Nigeria"
        subtitle="Helping businesses grow through reliable accounting, auditing, tax advisory, and financial consulting services."
    >
        <x-slot:actions>
            <a href="{{ route('contact') }}" class="btn-primary">Book Consultation</a>
            <a href="{{ route('services.index') }}" class="btn-outline">Explore Services</a>
        </x-slot:actions>

        <x-slot:media>
            <div class="media-frame h-80 md:h-[30rem]">
                <img src="https://source.unsplash.com/1600x1000/?african,business,team,meeting" alt="African professionals collaborating in a corporate meeting">
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell pt-8 md:pt-10">
        <div class="container-shell">
            <div class="mb-6 flex items-end justify-between gap-4">
                <div>
                    <p class="section-kicker">Performance Snapshot</p>
                    <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Results that reflect execution quality</h2>
                </div>
            </div>
            <div class="grid gap-3 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($site['stats'] as $stat)
                    <x-stats-counter :label="$stat['label']" :value="$stat['value']" :suffix="$stat['suffix']" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell">
            <div class="mb-8 flex items-end justify-between gap-4">
                <div>
                    <p class="section-kicker">Service Overview</p>
                    <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Business-critical support, built for scale</h2>
                </div>
                <a href="{{ route('services.index') }}" class="hidden text-sm font-semibold text-primary hover:text-primary-deep md:inline-flex">View all services</a>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($site['services']['overview'] as $service)
                    <x-service-card
                        :title="$service['name']"
                        :icon="$service['icon'] ?? 'sparkles'"
                        description="Focused solutions designed to improve operational control, reporting quality, and regulatory readiness."
                        :href="route($service['route'])"
                    />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell grid gap-8 lg:grid-cols-2">
            <div>
                <p class="section-kicker">Why Choose Us</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">A trusted financial partner for growth-stage and established businesses</h2>
                <ul class="mt-6 grid gap-3">
                    @foreach ($whyChooseUs as $point)
                        <li class="card-shell py-4">
                            <div class="flex items-start gap-3">
                                <span class="accent-dot mt-2"></span>
                                <span>{{ $point }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <div class="media-frame mb-6 h-52">
                    <img src="https://source.unsplash.com/1400x900/?african,consulting,office" alt="African consultants discussing strategy in an office">
                </div>
                <p class="section-kicker">Testimonials</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">What our clients say</h2>
                <div class="mt-6">
                    <x-testimonial-slider :items="[
                        ['quote' => 'ECA transformed our financial reporting process and helped us cut compliance bottlenecks by over 40%.', 'name' => 'Ngozi Adebayo', 'role' => 'Finance Director', 'company' => 'Meridian Retail Group'],
                        ['quote' => 'Their tax advisory team gave us confidence through a complex restructuring and kept us fully compliant.', 'name' => 'Tunde Bello', 'role' => 'Managing Director', 'company' => 'Vertex Manufacturing'],
                        ['quote' => 'Responsive, strategic, and detail-oriented. They feel like an extension of our executive team.', 'name' => 'Amaka Okorie', 'role' => 'COO', 'company' => 'Helix Health Services']
                    ]" />
                </div>
            </div>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell">
            <p class="section-kicker">Industries Served</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Sector expertise across diverse operating environments</h2>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($site['industries'] as $industry)
                    <article class="card-shell">
                        <div class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-primary">
                            <x-icon name="briefcase" class="h-4 w-4" />
                        </div>
                        <h3 class="mt-4 font-heading text-lg font-bold text-slate-900">{{ $industry }}</h3>
                        <p class="mt-2 text-sm text-slate-600">Finance, compliance, and reporting support tailored to your industry dynamics.</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell grid gap-8 lg:grid-cols-2">
            <div>
                <p class="section-kicker">Our Process</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">A clear framework from discovery to measurable outcomes</h2>
                <div class="mt-6 grid gap-3">
                    @foreach ($site['process'] as $item)
                        <article class="card-shell py-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">Step {{ $loop->iteration }}</p>
                            <h3 class="mt-2 font-heading text-lg font-bold text-slate-900">{{ $item['step'] }}</h3>
                            <p class="mt-2 text-sm text-slate-600">{{ $item['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="section-kicker">Team Preview</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Experienced specialists focused on your growth goals</h2>
                <div class="mt-6 grid gap-3">
                    @foreach ($site['teamPreview'] as $member)
                        <article class="card-shell py-4">
                            <h3 class="font-heading text-lg font-bold text-slate-900">{{ $member['name'] }}</h3>
                            <p class="mt-1 text-sm font-semibold text-primary">{{ $member['role'] }}</p>
                            <p class="mt-2 text-sm text-slate-600">{{ $member['focus'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell">
            <div class="mb-8 flex items-end justify-between gap-4">
                <div>
                    <p class="section-kicker">Blog and Insights Preview</p>
                    <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Fresh insights for better financial decisions</h2>
                </div>
                <a href="{{ route('blog') }}" class="hidden text-sm font-semibold text-primary hover:text-primary-deep md:inline-flex">Visit insights</a>
            </div>
            <div class="grid gap-4 lg:grid-cols-3">
                @foreach ($site['insights'] as $insight)
                    <article class="card-shell">
                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">{{ $insight['category'] }}</p>
                        <h3 class="mt-3 font-heading text-xl font-bold text-slate-900">{{ $insight['title'] }}</h3>
                        <p class="mt-3 text-sm text-slate-600">{{ $insight['summary'] }}</p>
                        <a href="{{ route('blog') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-primary">Read article <x-icon name="sparkles" class="h-4 w-4 text-primary" /></a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell">
            <p class="section-kicker">FAQ</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Quick answers for decision makers</h2>
            <div class="mt-6 grid gap-3">
                @foreach ($site['faq'] as $entry)
                    <x-faq-item :question="$entry['question']" :answer="$entry['answer']" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell grid gap-6 rounded-3xl border border-slate-200 bg-white p-8 lg:grid-cols-2 lg:items-center">
            <div>
                <p class="section-kicker">Newsletter</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Get practical finance and compliance insights monthly</h2>
                <p class="mt-3 text-sm text-slate-600">Join founders, finance managers, and business leaders receiving actionable updates.</p>
            </div>
            <form class="grid gap-3 sm:grid-cols-[1fr_auto]" action="#" method="post">
                @csrf
                <label class="sr-only" for="home-newsletter">Email</label>
                <input id="home-newsletter" type="email" name="email" placeholder="Enter your business email" class="rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                <button type="submit" class="btn-accent">Subscribe</button>
            </form>
        </div>
    </section>

    <section class="section-shell">
        <div class="container-shell">
            <x-cta
                title="Need a dependable finance and compliance partner?"
                description="Book a consultation to discuss your accounting, tax, audit, or advisory priorities with our experts."
                buttonText="Book Consultation"
                :buttonHref="route('contact')"
            >
                We design practical engagement plans that match your growth stage and industry realities.
            </x-cta>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('content')
    @php
        $benefits = [
            'Growth opportunities through hands-on client work.',
            'Competitive compensation and performance rewards.',
            'Continuous learning and professional development support.',
            'Collaborative culture with experienced mentors.',
        ];

        $positions = [
            ['title' => 'Senior Tax Associate', 'location' => 'Port Harcourt', 'type' => 'Full-time'],
            ['title' => 'Audit Associate', 'location' => 'Port Harcourt', 'type' => 'Full-time'],
            ['title' => 'Accounting Analyst', 'location' => 'Hybrid', 'type' => 'Full-time'],
            ['title' => 'Payroll Specialist', 'location' => 'Port Harcourt', 'type' => 'Contract'],
        ];
    @endphp

    <x-hero
        eyebrow="Careers"
        title="Join Our Team"
        subtitle="Build your career with a high-performing advisory team supporting business growth across Nigeria."
    >
        <x-slot:actions>
            <a href="#application-form" class="btn-primary">Apply Now</a>
            <a href="{{ route('about') }}" class="btn-outline">Our Culture</a>
        </x-slot:actions>

        <x-slot:media>
            <div class="media-frame h-72 md:h-80">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1600&q=80" alt="African professionals collaborating in a modern workplace">
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell">
        <div class="container-shell grid gap-8 lg:grid-cols-2">
            <div>
                <p class="section-kicker">Company Culture</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">A workplace built on ownership, growth, and impact</h2>
                <p class="mt-4 text-slate-600">At ECA Professional Services, we invest in people who are curious, disciplined, and committed to helping businesses make better financial decisions. You will work with experienced professionals, lead meaningful assignments, and grow through practical learning.</p>
            </div>
            <div>
                <p class="section-kicker">Employee Benefits</p>
                <div class="mt-6 grid gap-3">
                    @foreach ($benefits as $benefit)
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
            <p class="section-kicker">Open Positions</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Current opportunities</h2>
            <div class="mt-8 grid gap-4 md:grid-cols-2">
                @foreach ($positions as $position)
                    <article class="card-shell">
                        <h3 class="font-heading text-xl font-bold text-slate-900">{{ $position['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600">{{ $position['location'] }} • {{ $position['type'] }}</p>
                        <a href="#application-form" class="mt-5 inline-flex text-sm font-semibold text-primary hover:text-primary-deep">Apply for this role</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="application-form" class="section-shell">
        <div class="container-shell">
            <div class="rounded-3xl border border-slate-200 bg-white p-8 md:p-10">
                <p class="section-kicker">Job Application Form</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Submit your application</h2>

                @if (session('career_success'))
                    <div class="mt-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                        {{ session('career_success') }}
                    </div>
                @endif

                @if ($errors->has('name') || $errors->has('email') || $errors->has('phone') || $errors->has('position') || $errors->has('cv') || $errors->has('cover_letter'))
                    <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        Please correct the highlighted fields and submit again.
                    </div>
                @endif

                <form class="mt-6 grid gap-4 md:grid-cols-2" action="{{ route('careers.submit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="career-name" class="mb-1 block text-sm font-medium text-slate-700">Name</label>
                        <input id="career-name" type="text" name="name" value="{{ old('name') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="career-email" class="mb-1 block text-sm font-medium text-slate-700">Email</label>
                        <input id="career-email" type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="career-phone" class="mb-1 block text-sm font-medium text-slate-700">Phone</label>
                        <input id="career-phone" type="text" name="phone" value="{{ old('phone') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('phone')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="career-position" class="mb-1 block text-sm font-medium text-slate-700">Position</label>
                        <input id="career-position" type="text" name="position" value="{{ old('position') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('position')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="career-cv" class="mb-1 block text-sm font-medium text-slate-700">Upload CV (PDF, DOC, DOCX)</label>
                        <input id="career-cv" type="file" name="cv" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('cv')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="career-cover-letter" class="mb-1 block text-sm font-medium text-slate-700">Cover Letter</label>
                        <textarea id="career-cover-letter" name="cover_letter" rows="5" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none">{{ old('cover_letter') }}</textarea>
                        @error('cover_letter')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="md:col-span-2">
                        <button type="submit" class="btn-primary">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
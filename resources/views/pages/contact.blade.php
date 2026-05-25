@extends('layouts.app')

@section('content')
    <x-hero
        eyebrow="Contact"
        title="Contact ECA Professional Services"
        subtitle="Speak with our team about accounting, audit, tax, and advisory support for your business."
    >
        <x-slot:media>
            <div class="media-frame h-72 md:h-80">
                <img src="https://images.unsplash.com/photo-1552581234-26160f608093?auto=format&fit=crop&w=1600&q=80" alt="African corporate reception and business environment">
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell">
        <div class="container-shell grid gap-4 md:grid-cols-3">
            <article class="card-shell">
                <h2 class="font-heading text-lg font-bold text-slate-900">Phone</h2>
                <p class="mt-2 text-slate-600">{{ $site['contact']['phone'] }}</p>
            </article>
            <article class="card-shell">
                <h2 class="font-heading text-lg font-bold text-slate-900">Email</h2>
                <p class="mt-2 text-slate-600">{{ $site['contact']['email'] }}</p>
            </article>
            <article class="card-shell">
                <h2 class="font-heading text-lg font-bold text-slate-900">Address</h2>
                <p class="mt-2 text-slate-600">{{ $site['contact']['address'] }}</p>
            </article>
        </div>
    </section>

    <section class="section-shell bg-slate-50">
        <div class="container-shell grid gap-8 lg:grid-cols-2">
            <div class="rounded-3xl border border-slate-200 bg-white p-8 md:p-10">
                <p class="section-kicker">Contact Form</p>
                <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Send us a message</h2>

                @if (session('contact_success'))
                    <div class="mt-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
                        {{ session('contact_success') }}
                    </div>
                @endif

                @if ($errors->has('name') || $errors->has('email') || $errors->has('phone') || $errors->has('subject') || $errors->has('message'))
                    <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        Please correct the highlighted fields and try again.
                    </div>
                @endif

                <form class="mt-6 grid gap-4" action="{{ route('contact.submit') }}" method="post">
                    @csrf
                    <div>
                        <label for="contact-name" class="mb-1 block text-sm font-medium text-slate-700">Name</label>
                        <input id="contact-name" type="text" name="name" value="{{ old('name') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="contact-email" class="mb-1 block text-sm font-medium text-slate-700">Email</label>
                        <input id="contact-email" type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="contact-phone" class="mb-1 block text-sm font-medium text-slate-700">Phone</label>
                        <input id="contact-phone" type="text" name="phone" value="{{ old('phone') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('phone')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="contact-subject" class="mb-1 block text-sm font-medium text-slate-700">Subject</label>
                        <input id="contact-subject" type="text" name="subject" value="{{ old('subject') }}" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none" />
                        @error('subject')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label for="contact-message" class="mb-1 block text-sm font-medium text-slate-700">Message</label>
                        <textarea id="contact-message" name="message" rows="5" class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm focus:border-primary focus:outline-none">{{ old('message') }}</textarea>
                        @error('message')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <button type="submit" class="btn-primary">Send Message</button>
                    </div>
                </form>
            </div>

            <div class="space-y-4">
                <article class="card-shell">
                    <h2 class="font-heading text-xl font-bold text-slate-900">Business Hours</h2>
                    <p class="mt-2 text-sm text-slate-600">{{ $site['contact']['hours'] }}</p>
                </article>
                <article class="card-shell">
                    <h2 class="font-heading text-xl font-bold text-slate-900">Google Maps</h2>
                    <div class="mt-3 rounded-xl border border-slate-200 bg-slate-100 p-6 text-sm text-slate-600">
                        Map placeholder: {{ $site['contact']['address'] }}
                    </div>
                </article>
                <article class="card-shell">
                    <h2 class="font-heading text-xl font-bold text-slate-900">Follow Us</h2>
                    <div class="mt-3 flex gap-4 text-sm font-semibold text-primary">
                        <a href="#" aria-label="LinkedIn">LinkedIn</a>
                        <a href="#" aria-label="X">X</a>
                        <a href="#" aria-label="Facebook">Facebook</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
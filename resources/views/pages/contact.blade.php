@extends('layouts.app')

@section('content')
    <x-hero title="Contact ECA Professional Services" subtitle="Speak with our team about accounting, audit, tax, and advisory support for your business." />

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
@endsection
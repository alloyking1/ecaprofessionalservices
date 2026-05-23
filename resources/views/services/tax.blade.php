@extends('layouts.app')

@section('content')
    <x-hero :title="$service['name']" :subtitle="$service['summary']" />

    <section class="section-shell">
        <div class="container-shell prose max-w-none">
            <p>Detailed Tax Services sections (benefits, process, industries, FAQ, testimonials, related services, and CTA) will be completed in Milestone 4.</p>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('content')
    <x-hero title="Frequently Asked Questions" subtitle="Quick answers to common questions about our accounting, audit, and tax services." />

    <section class="section-shell">
        <div class="container-shell grid gap-3">
            <x-faq-item question="Do you support tax filing for SMEs?" answer="Yes. We support SMEs with planning, filing, and regulatory reporting." />
            <x-faq-item question="How long does an audit take?" answer="Timing depends on scope, but we provide a clear timeline after discovery." />
        </div>
    </section>
@endsection
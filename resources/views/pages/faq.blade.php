@extends('layouts.app')

@section('content')
    @php
        $faqItems = [
            ['topic' => 'Tax Filing', 'question' => 'Do you support tax filing for SMEs?', 'answer' => 'Yes. We support SMEs with planning, filing schedules, and statutory reporting requirements.'],
            ['topic' => 'Tax Filing', 'question' => 'Can you help us reduce tax risk?', 'answer' => 'Yes. We conduct risk reviews, identify gaps, and recommend practical corrective actions.'],
            ['topic' => 'Audit Process', 'question' => 'How long does an audit engagement take?', 'answer' => 'It depends on scope and documentation readiness. We define timelines during discovery.'],
            ['topic' => 'Audit Process', 'question' => 'Do you offer audit readiness support?', 'answer' => 'Yes. We assist with internal checks, documentation, and control preparedness before fieldwork.'],
            ['topic' => 'Pricing', 'question' => 'How is your pricing structured?', 'answer' => 'Pricing depends on scope, complexity, and delivery model. We provide clear proposals after consultation.'],
            ['topic' => 'Consultation', 'question' => 'How do we start an engagement?', 'answer' => 'Book a consultation through our contact page. We assess needs and share a recommended plan.'],
            ['topic' => 'Accounting Services', 'question' => 'Can you work with our in-house finance team?', 'answer' => 'Yes. We can operate as a full outsourced team or as an extension of your internal team.'],
        ];

        $topics = collect($faqItems)->pluck('topic')->unique()->values()->all();
    @endphp

    <x-hero
        eyebrow="Help Center"
        title="Frequently Asked Questions"
        subtitle="Quick answers to common questions about our accounting, audit, tax, and advisory services."
    >
        <x-slot:media>
            <div class="media-frame h-72 md:h-80">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=1600&q=80" alt="African business team discussing client support questions">
            </div>
        </x-slot:media>
    </x-hero>

    <section class="section-shell bg-slate-50" x-data="{ activeTopic: 'All' }">
        <div class="container-shell">
            <p class="section-kicker">FAQ Topics</p>
            <h2 class="mt-2 font-heading text-3xl font-bold text-slate-900">Find answers by category</h2>

            <div class="mt-6 flex flex-wrap gap-2">
                <button type="button" @click="activeTopic='All'" :class="activeTopic==='All' ? 'bg-primary text-white' : 'bg-white text-slate-700'" class="rounded-full border border-slate-300 px-4 py-2 text-sm font-medium">All</button>
                @foreach ($topics as $topic)
                    <button type="button" @click="activeTopic='{{ $topic }}'" :class="activeTopic==='{{ $topic }}' ? 'bg-primary text-white' : 'bg-white text-slate-700'" class="rounded-full border border-slate-300 px-4 py-2 text-sm font-medium">{{ $topic }}</button>
                @endforeach
            </div>

            <div class="mt-8 grid gap-3">
                @foreach ($faqItems as $index => $item)
                    <div x-show="activeTopic === 'All' || activeTopic === '{{ $item['topic'] }}'" x-transition>
                        <x-faq-item :question="$item['question']" :answer="$item['answer']" :id="'faq-' . $index" />
                    </div>
                @endforeach
            </div>

            <div class="mt-10 rounded-2xl border border-slate-200 bg-white p-6">
                <h3 class="font-heading text-xl font-bold text-slate-900">Still have questions?</h3>
                <p class="mt-2 text-sm text-slate-600">Our team is ready to provide clarity on scope, timelines, and engagement options.</p>
                <a href="{{ route('contact') }}" class="btn-primary mt-5">Contact Our Team</a>
            </div>
        </div>
    </section>
@endsection
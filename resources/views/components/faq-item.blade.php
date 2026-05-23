@props([
    'question',
    'answer',
    'id' => uniqid('faq-'),
])

<article class="rounded-xl border border-slate-200 bg-white p-5" x-data="{ open: false }">
    <button
        type="button"
        class="flex w-full items-center justify-between gap-4 text-left"
        @click="open = !open"
        :aria-expanded="open.toString()"
        aria-controls="{{ $id }}"
    >
        <span class="font-semibold text-slate-900">{{ $question }}</span>
        <span class="text-primary" x-text="open ? '−' : '+'"></span>
    </button>
    <p id="{{ $id }}" x-show="open" x-transition class="mt-3 text-sm text-slate-600" x-cloak>{{ $answer }}</p>
</article>
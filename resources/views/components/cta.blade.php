@props([
    'title',
    'description' => null,
    'buttonText' => 'Book Consultation',
    'buttonHref' => null,
])

<section class="rounded-2xl bg-gradient-to-r from-primary to-primary-deep p-6 text-white sm:p-8 md:p-10">
    <h2 class="font-heading text-xl font-bold sm:text-2xl">{{ $title }}</h2>
    @if ($description)
        <p class="mt-3 max-w-2xl text-sm text-blue-100">{{ $description }}</p>
    @endif
    @if (trim((string) $slot) !== '')
        <div class="mt-4 text-sm text-blue-100">
            {{ $slot }}
        </div>
    @endif
    @if ($buttonHref)
        <a href="{{ $buttonHref }}" class="mt-6 inline-flex rounded-lg bg-secondary px-5 py-3 text-sm font-semibold text-slate-900 hover:bg-yellow-300">
            {{ $buttonText }}
        </a>
    @endif
</section>
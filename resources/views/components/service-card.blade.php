@props([
    'title',
    'description' => '',
    'href' => '#',
    'icon' => 'chart-bar',
    'cta' => 'Learn more',
])

<article class="card-shell">
    <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-primary">
        <x-icon :name="$icon" class="h-5 w-5" />
    </div>

    <h3 class="mt-4 font-heading text-xl font-bold text-slate-900">{{ $title }}</h3>
    @if ($description)
        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $description }}</p>
    @endif
    <a href="{{ $href }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary hover:text-primary-deep">
        {{ $cta }}
        <x-icon name="sparkles" class="h-4 w-4 text-primary" />
    </a>
</article>
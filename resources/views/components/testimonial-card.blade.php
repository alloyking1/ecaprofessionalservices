@props([
    'quote',
    'name',
    'role',
    'company' => null,
])

<figure class="card-shell h-full">
    <blockquote class="text-slate-700">&ldquo;{{ $quote }}&rdquo;</blockquote>
    <figcaption class="mt-5 text-sm">
        <span class="font-semibold text-slate-900">{{ $name }}</span>
        <span class="text-slate-500">, {{ $role }}</span>
        @if ($company)
            <span class="text-slate-500"> at {{ $company }}</span>
        @endif
    </figcaption>
</figure>
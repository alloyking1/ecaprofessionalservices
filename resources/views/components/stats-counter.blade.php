@props([
    'label',
    'value',
    'suffix' => '',
])

<div
    class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm"
    x-data="counter({ target: {{ (int) $value }} })"
    x-init="
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    start();
                    observer.disconnect();
                }
            });
        }, { threshold: 0.35 });
        observer.observe($el);
    "
>
    <p class="font-heading text-3xl font-bold text-primary">
        <span x-text="current">0</span>{{ $suffix }}
    </p>
    <p class="mt-1 text-sm text-slate-500">{{ $label }}</p>
</div>
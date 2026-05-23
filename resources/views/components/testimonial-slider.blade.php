@props([
    'items' => [],
])

<section
    class="relative"
    x-data="testimonialSlider({ total: {{ count($items) }} })"
    x-init="init()"
    @mouseenter="stop()"
    @mouseleave="start()"
>
    <div class="overflow-hidden">
        <div class="flex transition-transform duration-500" :style="`transform: translateX(-${activeIndex * 100}%);`">
            @foreach ($items as $item)
                <div class="w-full shrink-0 px-1">
                    <x-testimonial-card
                        :quote="$item['quote']"
                        :name="$item['name']"
                        :role="$item['role']"
                        :company="$item['company'] ?? null"
                    />
                </div>
            @endforeach
        </div>
    </div>

    @if (count($items) > 1)
        <div class="mt-5 flex items-center justify-between">
            <div class="flex gap-2" role="tablist" aria-label="Testimonials">
                @foreach ($items as $index => $item)
                    <button
                        type="button"
                        class="h-2.5 w-2.5 rounded-full transition"
                        :class="activeIndex === {{ $index }} ? 'bg-primary' : 'bg-slate-300'"
                        @click="goTo({{ $index }})"
                        aria-label="Go to testimonial {{ $index + 1 }}"
                    ></button>
                @endforeach
            </div>

            <div class="flex gap-2">
                <button type="button" class="rounded-md border border-slate-300 px-3 py-1.5 text-sm hover:border-primary hover:text-primary" @click="prev()">
                    Prev
                </button>
                <button type="button" class="rounded-md border border-slate-300 px-3 py-1.5 text-sm hover:border-primary hover:text-primary" @click="next()">
                    Next
                </button>
            </div>
        </div>
    @endif
</section>

@props([
    'name' => 'sparkles',
    'class' => 'h-5 w-5',
])

@switch($name)
    @case('calculator')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="5" y="3.5" width="14" height="17" rx="2" />
            <path d="M8.5 8h7" />
            <path d="M8.5 12h1m5 0h1M8.5 15.5h1m5 0h1" />
        </svg>
        @break

    @case('shield-check')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 3l7 3v5c0 5-3.2 8-7 10-3.8-2-7-5-7-10V6l7-3z" />
            <path d="M9.5 12.5l1.8 1.8 3.4-3.4" />
        </svg>
        @break

    @case('chart')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M4 19.5h16" />
            <path d="M7 16V10" />
            <path d="M12 16V7" />
            <path d="M17 16V12" />
        </svg>
        @break

    @case('briefcase')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3.5" y="7" width="17" height="12" rx="2" />
            <path d="M9 7V5.5A1.5 1.5 0 0110.5 4h3A1.5 1.5 0 0115 5.5V7" />
            <path d="M3.5 12h17" />
        </svg>
        @break

    @default
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 3l2.1 4.7L19 10l-4.9 2.3L12 17l-2.1-4.7L5 10l4.9-2.3L12 3z" />
        </svg>
@endswitch

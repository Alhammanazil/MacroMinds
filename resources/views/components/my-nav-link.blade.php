@props(['href', 'current' => false, 'ariaCurrent' => false])

@php
    if ($current) {
        $classes = 'text-blue-600 font-semibold';
    } else {
        $classes = 'text-slate-700 hover:text-slate-900';
    }
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'relative px-1 py-2 text-sm font-medium transition-colors duration-300 ' . $classes]) }}>
    {{ $slot }}
    @if ($current)
        <span class="absolute bottom-0 left-0 right-0 h-0.5 bg-blue-600 rounded-full"></span>
    @endif
</a>

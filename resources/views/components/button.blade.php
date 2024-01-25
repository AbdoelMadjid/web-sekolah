@props([
    'color' => 'primary',
    'size' => 'md',
    'outline' => false,
    'text' => 'Button',
])

@php
    $classes = ['btn', "btn-$size", "btn-$color"];

    if ($outline) {
        $classes[] = 'btn-outline';
    }
@endphp

<button {{ $attributes->merge(['class' => implode(' ', $classes), 'type' => 'button']) }}>
    {{ $text }}
</button>

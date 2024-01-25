@props([
    'name' => null,
    'style' => config('laravel-bootstrap-components.font_awesome_style'),
    'size' => null,
    'color' => null,
    'spin' => false,
    'pulse' => false,
    'beat' => false,
    'flip' => false,
    'shake' => false,
    'rotate_90' => false,
    'rotate_180' => false,
    'rotate_270' => false,
])

@php
    $attributes = $attributes->class(['fa' . Str::limit($style, 1, null) . ' fa-' . $name, 'fa-' . $size => $size, 'text-' . $color => $color, 'fa-spin' => $spin, 'fa-pulse' => $pulse, 'fa-beat' => $beat, 'fa-flip' => $flip, 'fa-shake' => $shake, 'fa-rotate-90' => $rotate_90, 'fa-rotate-180' => $rotate_180, 'fa-rotate-270' => $rotate_270])->merge([
        //
    ]);
@endphp

@if ($name)
    <i {{ $attributes }}></i>
@endif

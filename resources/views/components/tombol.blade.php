<!-- resources/views/components/button.blade.php -->

@props([
    'icon' => null,
    'label' => null,
    'color' => 'primary',
    'size' => null,
    'type' => 'button',
    'route' => null,
    'url' => null,
    'href' => null,
    'dismiss' => null,
    'toggle' => null,
    'click' => null,
    'confirm' => false,
    'outline' => 'btn-outline',
])

@php
    if ($route) {
        try {
            $href = route($route);
        } catch (\Exception $e) {
            // Handle the exception or log it, for example:
            $href = null;
            \Log::error("Error generating route for button: {$e->getMessage()}");
        }
    } elseif ($url) {
        $href = url($url);
    }

    $attributes = $attributes->class(['btn btn-' . $color, 'btn-' . $size => $size])->merge([
        'type' => !$href ? $type : null,
        'href' => $href,
        'btn-outline' => $outline,
        'data-bs-dismiss' => $dismiss,
        'data-bs-toggle' => $toggle,
        'wire:click' => $click,
        'onclick' => $confirm ? 'confirm(\'' . __('Are you sure?') . '\') || event.stopImmediatePropagation()' : null,
    ]);
@endphp

<{{ $href ? 'a' : 'button' }} {{ $attributes }}>
    <x-icon :name="$icon" />

    {{ $label ?? $slot }}
    </{{ $href ? 'a' : 'button' }}>

@props([
    'icon' => null,
    'label' => null,
    'color' => 'success',
    'dismissible' => false,
    'title' => '',
])

@php
    $attributes = $attributes->class(['alert alert-' . $color . ' fade show', 'alert-dismissible' => $dismissible])->merge([
        //
    ]);
    switch ($color) {
        case 'warning':
            $icon = 'fal fa-exclamation-circle';
            break;
        case 'danger':
            $icon = 'fal fa-times-circle';
            break;
        case 'info':
            $icon = 'fal fa-info-circle';
            break;
        case 'success':
            $icon = 'fal fa-check-circle';
            break;
    }
@endphp

<div {{ $attributes }} role="alert">
    @if ($dismissible)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
        </button>
    @endif
    <div class="d-flex align-items-center">
        <div class="alert-icon">
            <i class="{{ $icon }}"></i>
        </div>
        <div class="flex-1">
            <span class="h4">{{ $title }}</span>
            <br>

            {!! $label ?? $slot !!}
        </div>

    </div>
</div>

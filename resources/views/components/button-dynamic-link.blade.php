@props(['url', 'title', 'style', 'iconClass'])

<a href="{{ $url }}" class="btn btn-sm {{ $style ?? 'btn-primary' }}" title="{{ $title }}">
    <span class="hidden-xl-up"><i class="fal fa-{{ $iconClass ?? 'reply' }}"></i> </span>
    <span class="hidden-sm-down"> {{ $title }} </span>
</a>

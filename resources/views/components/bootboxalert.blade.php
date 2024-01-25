@props(['id', 'typebutton', 'datatitle', 'datamessage', 'url', 'icon'])

<button id="{{ $id ?? 'eksekusi' }}" class="btn btn-sm btn-{{ $typebutton }} ml-auto mr-2"
    data-title="{{ $datatitle }}" data-message="{{ $datamessage }}" data-redirect-url="/{{ $url }}">
    <i class="fal fa-{{ $icon }}"></i> {{ $slot }}
</button>

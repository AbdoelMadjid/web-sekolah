<button class="btn btn-sm btn-{{ $typebutton }} ml-auto mr-2" id="{{ $id }}" data-title="{{ $datatitle }}"
    data-message="{{ $datamessage }}" data-redirect-url="/{{ $url }}">
    <i class="fal fa-{{ $icon }}"></i> {{ $slot }}
</button>

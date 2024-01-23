<div id="{{ $id_panel }}" class="panel">
    <div class="panel-hdr">
        <h2>
            @isset($icon)
                <i class="fal fa-{{ $icon }} fa-lg text-info mr-2"></i>
            @endisset
            {{ $judulutama }}
            @isset($judulspan)
                <span class="fw-300"><i>{{ $judulspan }}</i></span>
            @endisset
        </h2>
        @isset($paneltoolbar)
            {{ $paneltoolbar }}
        @endisset
    </div>
    <div class="panel-container show">
        @isset($panelcontentbar)
            {{ $panelcontentbar }}
        @endisset
        <div class="panel-content">
            {{ $slot }}
        </div>
        @isset($panelcontentfoot)
            {{ $panelcontentfoot }}
        @endisset
    </div>
</div>

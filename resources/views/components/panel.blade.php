@props(['id_panel', 'icon', 'judulutama', 'judulspan', 'paneltoolbar', 'panelcontentbar', 'panelcontentfoot'])

<div id="{{ $id_panel ?? 'panel01' }}" class="panel">
    <div class="panel-hdr">
        <h2>
            @isset($icon)
                <i class="fal fa-{{ $icon ?? 'cogs' }} fa-lg text-info mr-2"></i>
            @endisset
            @isset($judulutama)
                {{ $judulutama }}
            @endisset
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
            <div
                class="panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                {{ $panelcontentfoot }}
            </div>
        @endisset
    </div>
</div>

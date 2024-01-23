@props(['buttonText', 'items', 'buttonType' => 'outline-secondary'])

<div class="btn-group">
    <button class="btn btn-{{ $buttonType }} dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        {{ $buttonText }}
    </button>
    <div class="dropdown-menu">
        @foreach ($items as $item)
            <a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['label'] }}</a>
        @endforeach
    </div>
</div>

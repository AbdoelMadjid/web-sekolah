@props(['buttonText', 'items', 'buttonType' => 'outline-secondary', 'iconClass'])

<div class="btn-group">
    <button class="btn btn-sm btn-{{ $buttonType }} dropdown-toggle" type="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="hidden-xl-up"><i class="fal fa-{{ $iconClass ?? 'list' }}"></i> </span>
        <span class="hidden-sm-down"> {{ $buttonText }} </span>
    </button>
    <div class="dropdown-menu">
        @foreach ($items as $item)
            <a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['label'] }}</a>
        @endforeach
    </div>
</div>

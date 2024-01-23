@props(['buttons'])

<div class="btn-group mr-2" role="group" aria-label="Group A">
    @foreach ($buttons as $button)
        <button type="button" class="btn btn-light btn-sm bg-white"><i class="{{ $button['icon'] }}"></i></button>
    @endforeach
</div>

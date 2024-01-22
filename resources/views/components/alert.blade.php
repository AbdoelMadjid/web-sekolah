<!-- resources/views/components/Alert.blade.php -->
<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="fal fa-times"></i></span>
    </button>
    <div class="d-flex align-items-center">
        <div class="alert-icon">
            <i class="{{ $icon }}"></i>
        </div>
        <div class="flex-1">
            <span class="h4">{{ $title }}</span>
            <br>
            {{ $slot }}
        </div>
    </div>
</div>

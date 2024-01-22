<div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog @isset($modalSubTitle){{ $modalSize }}@endisset" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    {{ $modalTitle }}
                    @isset($modalSubTitle)
                        <small class="m-0 text-muted">
                            {{ $modalSubTitle }}
                        </small>
                    @endisset
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">{{ $modalAction }}</button>
            </div>
        </div>
    </div>
</div>

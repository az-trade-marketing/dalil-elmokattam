
<div class="modal fade" id="confirm-delete-modal" tabindex="-1" aria-labelledby="confirm-delete-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirm-delete-modal-label">{{ __('confirm_delete.confirm_delete')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               {{ __('confirm_delete.message')}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('confirm_delete.cancel')}}</button>
                <a href="#" id="confirm-delete-button" class="btn btn-danger">{{ __('confirm_delete.save')}}</a>
            </div>
        </div>
    </div>
</div>

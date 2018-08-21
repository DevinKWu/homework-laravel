<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
    
    <a  href="{{ route('admin.page.edit', $id)}}"
        class="btn btn-primary">
        <i  class="fa fa-pencil"
            data-toggle="tooltip"
            data-placement="top"
            title="{{ __('buttons.general.crud.edit') }}"></i>
    </a>
    
    <a  href="{{ route('admin.page.destroy', $id)}}"
        data-method="delete"
        data-trans-button-cancel="{{ __('buttons.general.cancel') }}"
        data-trans-button-confirm="{{ __('buttons.general.crud.delete') }}"
        data-trans-title="{{ __('strings.backend.general.are_you_sure') }}"
        class="btn btn-danger">
        <i  class="fa fa-trash"
            data-toggle="tooltip"
            data-placement="top"
            title="{{ __('buttons.general.crud.delete') }}"></i>
    </a>
    
</div>
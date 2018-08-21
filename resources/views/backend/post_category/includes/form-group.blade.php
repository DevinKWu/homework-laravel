
<div class="form-group row">
    {{ html()->label(__('models.post_category.validation.attributes.name'))
        ->class('col-md-2 form-control-label')
        ->for('name') }}

    <div class="col-md-10">
        {{ html()->text('name')
            ->class('form-control')
            ->placeholder(__('models.post_category.validation.attributes.name'))
            ->attribute('maxlength', 191)
            ->required()
            ->autofocus() }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('models.post_category.validation.attributes.body'))
        ->class('col-md-2 form-control-label')
        ->for('body') }}

    <div class="col-md-10">
        {{ html()->text('body')
            ->class('form-control')
            ->placeholder(__('models.post_category.validation.attributes.body')) }}
    </div><!--col-->
</div><!--form-group-->

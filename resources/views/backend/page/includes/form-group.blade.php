
<div class="form-group row">
    {{ html()->label(__('models.page.validation.attributes.name'))
        ->class('col-md-2 form-control-label')
        ->for('name') }}

    <div class="col-md-10">
        {{ html()->text('name')
            ->class('form-control')
            ->placeholder(__('models.page.validation.attributes.name'))
            ->attribute('maxlength', 191)
            ->required()
            ->autofocus() }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('models.page.validation.attributes.body'))
        ->class('col-md-2 form-control-label')
        ->for('body') }}

    <div class="col-md-10">
        {{ html()->text('body')
            ->class('form-control')
            ->placeholder(__('models.page.validation.attributes.body')) }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('models.page.validation.attributes.slug'))
        ->class('col-md-2 form-control-label')
        ->for('slug') }}

    <div class="col-md-10">
        {{ html()->text('slug')
            ->class('form-control')
            ->placeholder(__('models.page.validation.attributes.slug')) }}
    </div><!--col-->
</div><!--form-group-->
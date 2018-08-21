{{-- post_categories --}}

<div class="form-group row">
        {{ html()->label(__('models.post.validation.attributes.post_category'))->class('col-md-2 form-control-label')->for('post_category') }}

        <div class="col-md-10">
            <select name="post_category_id" id="post_category" class="form-control" required="required">
                @foreach ($post_categories as $post_category)
                    <option value="{{ $post_category->id }}" 
                        {{ (isset($post))? (($post->post_category_id == $post_category->id)?'selected':''): ''}}
                        {{ $post_category->id == old('post_category_id') ? ' selected' : '' }}>{{ $post_category->name }}</option>
                @endforeach
            </select>
        </div><!--col-->
    </div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('models.post.validation.attributes.name'))
        ->class('col-md-2 form-control-label')
        ->for('name') }}

    <div class="col-md-10">
        {{ html()->text('name')
            ->class('form-control')
            ->placeholder(__('models.post.validation.attributes.name'))
            ->attribute('maxlength', 191)
            ->required()
            ->autofocus() }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('models.post.validation.attributes.body'))
        ->class('col-md-2 form-control-label')
        ->for('body') }}

    <div class="col-md-10">
        {{ html()->text('body')
            ->class('form-control')
            ->placeholder(__('models.post.validation.attributes.body')) }}
    </div><!--col-->
</div><!--form-group-->

<div class="form-group row">
    {{ html()->label(__('models.post.validation.attributes.slug'))
        ->class('col-md-2 form-control-label')
        ->for('slug') }}

    <div class="col-md-10">
        {{ html()->text('slug')
            ->class('form-control')
            ->placeholder(__('models.post.validation.attributes.slug')) }}
    </div><!--col-->
</div><!--form-group-->
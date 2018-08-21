@extends ('backend.layouts.app')

@section ('title', __('models.post_category.management') . ' | ' . __('models.post_category.edit'))

@section('content')
    {{ html()->modelForm($post_category, 'PATCH', route('admin.post_category.update', $post_category))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            {{ __('models.post_category.management') }}
                            <small class="text-muted">{{ __('models.post_category.edit') }}</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->
                <!--row-->

                <hr />

                <div class="row mt-4">
                    <div class="col">
                        @include('backend.post_category.includes.form-group')

                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.post_category.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.update')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->closeModelForm() }}
@endsection

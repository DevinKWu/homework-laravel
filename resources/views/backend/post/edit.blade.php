@extends ('backend.layouts.app')

@section ('title', __('models.post.management') . ' | ' . __('models.post.edit'))

@section('content')
    {{ html()->modelForm($post, 'PATCH', route('admin.post.update', $post))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            {{ __('models.post.management') }}
                            <small class="text-muted">{{ __('models.post.edit') }}</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->
                <!--row-->

                <hr />

                <div class="row mt-4">
                    <div class="col">
                        @include('backend.post.includes.form-group')

                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.post.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.update')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->closeModelForm() }}
@endsection

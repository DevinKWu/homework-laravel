<?php

namespace App\Http\Requests\Backend\Post;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRequest.
 */
class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->canDo('manage post');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:post_categories|max:191',
            // 'body' => 'required',
        ];
    }
}

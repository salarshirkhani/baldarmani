<?php

namespace App\Http\Requests\Dashboard\Admin;

class CategoryUpdateRequest extends CategoryRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('update', $this->route('category'));
    }

    public function rules()
    {
        return parent::rules();
    }
}

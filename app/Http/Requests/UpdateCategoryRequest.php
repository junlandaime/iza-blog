<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() && auth()->user()->isAdmin();
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
            'description' => 'nullable|string',
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() && auth()->user()->isAdmin();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:categories',
        ];
    }
}

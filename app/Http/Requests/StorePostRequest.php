<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() && auth()->user()->isAdmin();
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255|unique:posts',
            'content' => 'required|string',
            'excerpt' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|string',
            'is_featured' => 'boolean',
            'status' => 'required|in:draft,published',
        ];
    }
}

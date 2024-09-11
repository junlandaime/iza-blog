<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        return [
            'content' => 'required|string|max:1000',
            'post_id' => 'required|exists:posts,id',
        ];
    }
}

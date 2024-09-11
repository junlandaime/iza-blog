<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Assuming anyone can submit a testimonial
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'content' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ];
    }
}

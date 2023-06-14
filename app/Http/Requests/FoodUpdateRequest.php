<?php

namespace App\Http\Requests;

use App\Models\Food;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FoodUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'calories' => 'integer',
            'proteines' => 'numeric',
            'glucides' => 'numeric',
            'lipides' => 'numeric',
            'diet' => 'array',
            'diet.*' > 'string|in:vegetarian,vegan,gluten_free,paleo,keto',
            'image' => 'string|max:255',
            'description' => 'string|max:255',
        ];
    }
}
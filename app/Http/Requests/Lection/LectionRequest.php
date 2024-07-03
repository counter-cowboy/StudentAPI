<?php

namespace App\Http\Requests\Lection;

use Illuminate\Foundation\Http\FormRequest;

class LectionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=>'Title required',
            'description.required'=>'Lection description required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

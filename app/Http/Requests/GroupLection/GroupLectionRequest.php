<?php

namespace App\Http\Requests\GroupLection;

use Illuminate\Foundation\Http\FormRequest;

class GroupLectionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'class_id' => ['nullable', 'integer'],
            'lection_id' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}

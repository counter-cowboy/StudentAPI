<?php

namespace App\Http\Requests\Lection;

use Illuminate\Foundation\Http\FormRequest;

class LectionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['required'],
            'desc' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}

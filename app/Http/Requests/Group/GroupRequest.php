<?php

namespace App\Http\Requests\Group;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'unique:groups'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}

<?php

namespace App\Http\Requests\Group;

use Illuminate\Foundation\Http\FormRequest;

class GroupUpdateLectionsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'lections' => 'array|required',
        ];
    }

    public function messages(): array
    {
        return [

          'name.array'=> 'Lections list must array of numbers'
        ];

    }

    public function authorize(): bool
    {
        return true;
    }
}

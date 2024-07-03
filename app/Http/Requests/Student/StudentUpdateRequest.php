<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'group_id' => ['nullable', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'group_id.integer' => 'Group ID must be a number'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

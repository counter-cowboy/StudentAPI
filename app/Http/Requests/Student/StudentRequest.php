<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email','unique:students', 'max:254'],
            'class_id' => ['nullable', 'integer'],
        ];
    }

    public function messages():array
    {
        return [
            'name.required'=> 'Name is required',
            'email.required'=>'Email is required',
            'email.email'=>'Address must be in e_mail format',
            'email.unique'=>'Email is not vacated'
        ]   ;
    }

    public function authorize(): bool
    {
        return true;
    }
}

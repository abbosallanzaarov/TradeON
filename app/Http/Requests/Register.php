<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
            return [
                'name'=>'required|string',
                'email'=>'unique:users|email',
                'phone'=>'required|unique:users,phone',
                'image'=>'string|nullable',
                'password'=>'required|min:8|max:16'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The file field is required.',
            'name.string' => 'The name must be a string.',
            'file.mimes' => 'The file must be a file of type: pdf.',
            'file.max' => 'The file may not be greater than 2048 kilobytes.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdressRequest extends FormRequest
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
            'region' => 'required|string',
            'street' => 'required|string',
            'home' => 'required|string',
            'district' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'region.required' => 'Region toldirishingiz majburiy',
            'region.string' => 'Region ustuni satr bolishi kerak',
            'street.required' => 'Street toldirishingiz majburiy',
            'street.string' => 'street ustuni satr bolishi kerak',
            'home.required' => 'Home toldirishingiz majburiy',
            'home.string' => 'home ustuni satr bolishi kerak',
            'district.required' => 'District toldirishingiz majburiy',
        ];

    }
}

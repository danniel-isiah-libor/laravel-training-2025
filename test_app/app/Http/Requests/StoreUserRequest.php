<?php

namespace App\Http\Requests;

use App\Rules\StatusRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string', 
                // 'email:dns,spoof,rfc',
                'max:255', 
                'unique:users'
            ],
            'password' => [
                'required', 
                'confirmed', 
                // Rules\Password::min(8)
                // ->max(12)
                // ->symbols()
                // ->mixedCase()
                // ->numbers()
                // ->letters()
                // ->uncompromised()
            ],
            // 'status' => [ new StatusRule ]
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Email has invalid format.'
        ];

    }

    // public function prepareForValidation()
    // {
    //     $this->merge([
    //         'user_id' => 1,
    //         'status' => 'inactive'
    //     ]);
    // }
}

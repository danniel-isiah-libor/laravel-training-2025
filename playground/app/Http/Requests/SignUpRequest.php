<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignUpRequest extends FormRequest
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
            'user_id' => [
                'required',
                // 'exists:users,id'
            ],
             'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'email:dns,strict,spoof,filter,rfc',
                'max:255',
                'unique:users,email,$id',
            ],
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->max(20)
                    ->symbols()
                    ->mixedCase()
                    ->numbers()
                    ->letters()
                    ->uncompromised()
            ]
        ];
    }

    public function messages(){
        return [
            'email.email' => 'This email must be a valid address',
            'email.required' => 'Email is required'

        ];
    }

    protected function prepareForValidation()
    {
    // for merging data without passing through front-end

        $this->merge([
            'user_id' => 1
        ]);
    }
}

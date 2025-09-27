<?php

namespace App\Http\Requests;

use App\Rules\StatusRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // guard check - like if the current user is admin
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
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email:rfc, dns, strict, spoof, filter',
                // 'unique:users, email',
            ],
            'password' => [
                'required',
                'string',
                // 'confirmed',
                // Password::min(8)->max(12)->symbols()->mixedCase()->numbers()->letters()->uncompromised(),
            ],
            'status' => [
                // new StatusRule(),
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'This is a required email field.'
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1,
            'status' => 'inactive',
        ]);
    }
}

<?php

namespace App\Http\Requests;

use App\Rules\StatusRule;
use Closure;
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
                'integer',
                // 'exists:users,id'
            ],
            'name' => ['required', 'string', 'min:1'],
            'email' => ['required', 'email:dns,rfc', 'unique:users'],
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)
                    ->max(12)
                    ->symbols()
                    ->mixedCase()
                    ->numbers()
                    ->letters()
                    ->uncompromised()
            ],
            'status' => [
                new StatusRule(),
            ]
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'The email is invalid format.',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1,
            'status' => 'inactive',
        ]);

    }
}

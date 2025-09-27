<?php

namespace App\Http\Requests;

use App\Rules\StatusRule;
use Closure;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SignupRequest extends FormRequest
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
            // 'user_id' => [
            //     'required',
            //     'integer',
            //     // 'exists:users,id'
            // ],
            'name' => [ // 'required|string'
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email:dns,strict,spoof,filter,rfc',
                'max:255',
                'unique:users',
            ],
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
                    ->uncompromised(),
                // 'max:12',
                // 'min:8',
            ],
            // 'status' => [
            //     new StatusRule(),

            //     function (string $attribute, mixed $value, Closure $fail) {
            //         if ($value !== 'active') {
            //             $fail('Status must be active.');
            //         }
            //     }
            // ]
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'email.email' => 'The email is invalid format.',
    //     ];
    // }

    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         'user_id' => 1,
    //         'status' => 'inactive',
    //     ]);
    // }
}

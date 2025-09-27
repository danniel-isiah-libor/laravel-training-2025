<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use \App\Rules\StatusRule;
class UserRequest extends FormRequest
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
                'exists:users,id'
            ],
            'fullname' => [
                "required",
                "string",
                "max:255"
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users'
            ],
            'password' => [
                'required',
                'string',
                Password::min(8)->max(12)->letters()->mixedCase()->numbers()->symbols()->uncompromised()
            ],
            'password_confirmation' => ["required",
            "string",
            "min:8",
            "same:password"
            ],
            // 'status' => [
            //     new StatusRule()
            // ]
        ];
    }

public function messeages()
{
    return [
        // 'fullname.required' => 'Full name is required',
        // 'email.required' => 'Email is required',
        // 'email.email' => 'Email must be a valid email address',
        // 'email.unique' => 'Email has already been taken',
        // 'password.required' => 'Password is required',
        // 'password.min' => 'Password must be at least 8 characters',
        // 'password.max' => 'Password must not exceed 12 characters',
        // 'confirm_password.required' => 'Confirm Password is required',
        // 'confirm_password.same' => 'Confirm Password must match the Password',
    ];
}

// merge additional data into the request before validation
public function prepareForValidation()
{
    $this->merge([
        'user_id' => 1,
    ]);

}



}
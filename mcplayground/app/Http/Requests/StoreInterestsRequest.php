<?php

namespace App\Http\Requests;

use App\Models\Interest;
use App\Rules\InterestExists;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreInterestsRequest extends FormRequest
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
            'interests' => [
                'required',
                'array',
                'min:1',
                Rule::in(Interest::listAll()),
                // new InterestExists(),
            ],
        ];
    }
}

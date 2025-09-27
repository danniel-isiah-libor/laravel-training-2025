<?php

namespace App\Rules;

use App\Models\Interest;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ExistingInterestRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $interests = Interest::fetchData();
        $missing = false;
        foreach ($value as $item) {
            if ($item !== $interests) {
                $missing = true;
                break;
            }
        }

        if ($missing) {
            $fail("Missing Item.");
        }
    }
}

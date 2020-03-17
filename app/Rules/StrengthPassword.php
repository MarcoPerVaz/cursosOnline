<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StrengthPassword implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        /*  */
        if ( ! $value) { /* Comprueba que el campo pasword tenga algún valor */
            return true;
        }

        $uppercase  = preg_match('@[A-Z]@', $value); /* Debe tener al menos una mayúscula */
        $lowercase  = preg_match('@[a-z]@', $value); /* Debe tener al menos una minúscula */
        $number     = preg_match('@[0-9]@', $value); /* Debe tener al menos un número */
        $length     = strlen($value) >= 8; /* Debe tener al menos 8 caracteres */

        $success = true;

        if (! $uppercase || ! $lowercase || ! $number || ! $length) {
            $success = false;
        }

        return $success;
        /*  */
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __("El :attribute debe tener 8 caracteres, un número, una letra mayúscula y una letra minúscula");
    }
}

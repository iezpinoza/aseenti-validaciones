<?php
namespace Aseenti\Validaciones\Reglas;
use Illuminate\Contracts\Validation\Rule;

class AniosValidos implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value >= 2013 && $value <= date('Y') && $value % 4 == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute no es un año válido';
    }
}
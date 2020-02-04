<?php

namespace Aseenti\Validaciones\Generales;
use CfdiUtils\Validate\Asserts;
use CfdiUtils\Validate\Status;

class ValidacionEmail
{
    public function __construct(){}

    public function validate(Asserts $asserts,$email)
    {
        $result = filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);
        $asserts->put(
            'EMAIL',
            'El campo email parece no ser válido',
            Status::when($result)
        );
    }
}

<?php

namespace TwoJays\NeonApiWrapper\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    public function __construct()
    {
        $this->message = 'Unauthorized access to API';
    }
}
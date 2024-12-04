<?php

namespace TwoJays\NeonApiWrapper\Exceptions;

use Exception;

class ForbiddenException extends Exception
{
    public function __construct()
    {
        $this->message = 'Forbidden';
    }
}
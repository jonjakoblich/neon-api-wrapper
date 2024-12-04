<?php

namespace TwoJays\NeonApiWrapper\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    public function __construct()
    {
        $this->message = 'The requested URL could not be found';
    }
}
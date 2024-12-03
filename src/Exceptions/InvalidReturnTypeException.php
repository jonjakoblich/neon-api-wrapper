<?php

namespace TwoJays\NeonApiWrapper\Exceptions;

use Exception;
use TwoJays\NeonApiWrapper\Contracts\DataObject;

class InvalidReturnTypeException extends Exception
{
    public function __construct()
    {
        $this->message = 'Invalid return type class. Must be of type ' . DataObject::class;
    }
}
<?php

namespace TwoJays\NeonApiWrapper\Exceptions;

use Exception;

class InvalidPropertyTypeException extends Exception
{
    public function __construct(
        public readonly string $propertyName,
        public readonly string $receivedType,
    ){
        $this->message = sprintf("The property %s must be of type %s.", $this->propertyName, $this->receivedType);
    }
}
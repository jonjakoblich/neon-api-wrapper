<?php

namespace TwoJays\NeonApiWrapper\Exceptions;

use Exception;
use Throwable;

class BadRequestException extends Exception
{
    public function __construct(Throwable $th)
    {
        $this->message = $th->getMessage();
        $this->code = $th->getCode();
    }
}
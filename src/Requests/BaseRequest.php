<?php

namespace TwoJays\NeonApiWrapper\Requests;

use TwoJays\NeonApiWrapper\Contracts\GetRequest;

abstract class BaseGetRequest implements GetRequest
{
    public function getEndpoint(): string
    {
        return $this::ENDPOINT_BASE;
    }
}
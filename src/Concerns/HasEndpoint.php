<?php

namespace TwoJays\NeonApiWrapper\Concerns;

trait HasEndpoint
{
    public function getEndpoint(): string
    {
        return $this::ENDPOINT_BASE;
    }
}
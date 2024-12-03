<?php

namespace TwoJays\NeonApiWrapper\Concerns;

trait HasEndpoint
{
    private string $endpoint = '';
    
    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE;
    }
    
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
}
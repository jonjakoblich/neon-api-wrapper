<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class APIMessageData
{
    public function __construct(
        public string $code,
        public string $message
    ) {}
}

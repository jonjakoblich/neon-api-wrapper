<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class APIMessageData extends Data
{
    public function __construct(
        public string $code,
        public string $message
    ) {}
}

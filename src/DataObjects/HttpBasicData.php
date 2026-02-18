<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class HttpBasicData extends Data
{
    public function __construct(
        public ?string $userName = null,
        public ?string $password = null
    ) {}
}

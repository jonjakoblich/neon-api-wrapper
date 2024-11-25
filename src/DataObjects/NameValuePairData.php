<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class NameValuePairData extends Data
{
    public function __construct(
        public string $name,
        public string $value
    ) {}
}

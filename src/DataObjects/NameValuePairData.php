<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class NameValuePairData
{
    public function __construct(
        public string $name,
        public string $value
    ) {}
}

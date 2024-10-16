<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CodeNamePairData
{
    public function __construct(
        public string $code,
        public string $name,
        public string $status
    ) {}
}

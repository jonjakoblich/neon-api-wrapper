<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class TributeData
{
    public function __construct(
        public string $name,
        public string $type
    ) {}
}

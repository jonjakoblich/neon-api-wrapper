<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class GenderVOData
{
    public function __construct(
        public string $code,
        public string $description,
        public string $status,
        public int $position
    ) {}
}

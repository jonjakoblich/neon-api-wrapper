<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class IdNamePairData
{
    public function __construct(
        public ?string $id,
        public ?string $name,
        public ?string $status
    ) {}
}

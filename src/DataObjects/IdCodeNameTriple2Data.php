<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class IdCodeNameTriple2Data
{
    public function __construct(
        public string $code,
        public string $id,
        public string $name,
        public string $status,
        public bool $isDefault
    ) {}
}

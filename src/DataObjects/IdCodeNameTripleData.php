<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class IdCodeNameTripleData
{
    public function __construct(
        public string $code,
        public string $id,
        public string $name,
        public string $status
    ) {}
}

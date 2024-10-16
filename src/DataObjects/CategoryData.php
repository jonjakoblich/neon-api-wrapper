<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CategoryData
{
    public function __construct(
        public string $code,
        public string $id,
        public string $description,
        public string $name,
        public int $displaySequence,
        public string $status
    ) {}
}

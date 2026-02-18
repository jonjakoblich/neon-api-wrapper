<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CategoryData extends Data
{
    public function __construct(
        public ?string $code = null,
        public ?string $id = null,
        public ?string $description = null,
        public ?string $name = null,
        public ?int $displaySequence = null,
        public ?string $status = null
    ) {}
}

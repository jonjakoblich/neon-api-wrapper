<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CatalogData extends Data
{
    public function __construct(
        public ?int $displaySequence = null,
        public ?string $id = null,
        public ?string $name = null,
        public ?string $status = null
    ) {}
}

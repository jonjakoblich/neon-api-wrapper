<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CatalogData extends Data
{
    public function __construct(
        public int $displaySequence,
        public string $id,
        public string $name,
        public string $status
    ) {}
}

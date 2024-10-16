<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CatalogData
{
    public function __construct(
        public int $displaySequence,
        public string $id,
        public string $name,
        public string $status
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProductOptionData
{
    public function __construct(
        public string $id,
        public array $items,
        public string $name,
        public string $status
    ) {}
}

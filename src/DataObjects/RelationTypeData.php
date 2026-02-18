<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class RelationTypeData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?bool $isSymmetric = null,
        public ?IdNamePairData $pairRelationType = null,
        public ?string $status = null,
        public ?bool $isDefault = null,
        public ?string $category = null
    ) {}
}

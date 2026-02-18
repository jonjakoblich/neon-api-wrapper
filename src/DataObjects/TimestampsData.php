<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TimestampsData extends Data
{
    public function __construct(
        public ?string $createdBy = null,
        public ?string $createdDateTime = null,
        public ?string $lastModifiedBy = null,
        public ?string $lastModifiedDateTime = null
    ) {}
}

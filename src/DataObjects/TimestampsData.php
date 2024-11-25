<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class TimestampsData extends Data
{
    public function __construct(
        public string $createdBy,
        public string $createdDateTime,
        public string $lastModifiedBy,
        public string $lastModifiedDateTime
    ) {}
}

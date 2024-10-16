<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class TimestampsData
{
    public function __construct(
        public string $createdBy,
        public string $createdDateTime,
        public string $lastModifiedBy,
        public string $lastModifiedDateTime
    ) {}
}

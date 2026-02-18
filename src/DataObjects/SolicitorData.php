<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SolicitorData extends Data
{
    public function __construct(
        public ?string $accountId = null,
        public ?string $solicitorName = null
    ) {}
}

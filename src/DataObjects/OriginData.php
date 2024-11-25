<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OriginData extends Data
{
    public function __construct(
        public ?string $originDetail,
        public ?string $originCategory
    ) {}
}

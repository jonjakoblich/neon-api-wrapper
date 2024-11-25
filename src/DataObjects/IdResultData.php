<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class IdResultData extends Data
{
    public function __construct(
        public string $id
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class NeonPaySettingData extends Data
{
    public function __construct(
        public ?string $merchantId = null,
        public ?string $publicKey = null
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class FinancialSettingsDonationsData extends Data
{
    public function __construct(
        public string $type,
        public string $label
    ) {}
}

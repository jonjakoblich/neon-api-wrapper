<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class FinancialSettingsDonationsData
{
    public function __construct(
        public string $type,
        public string $label
    ) {}
}

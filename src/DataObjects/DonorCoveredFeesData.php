<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DonorCoveredFeesData extends Data
{
    public function __construct(
        public ?float $creditCardFee = null,
        public ?float $creditCardAmExFee = null,
        public ?float $creditCardMasterCardFee = null,
        public ?float $achFee = null,
        public ?array $additionalFees = null
    ) {}
}

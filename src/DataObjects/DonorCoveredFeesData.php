<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class DonorCoveredFeesData extends Data
{
    public function __construct(
        public float $creditCardFee,
        public float $creditCardAmExFee,
        public float $achFee
    ) {}
}

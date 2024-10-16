<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class DonorCoveredFeesData
{
    public function __construct(
        public float $creditCardFee,
        public float $creditCardAmExFee,
        public float $achFee
    ) {}
}

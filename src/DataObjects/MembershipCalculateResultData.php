<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipCalculateResultData
{
    public function __construct(
        public float $subTotal,
        public float $totalDiscount,
        public float $totalCharge,
        public array $discounts
    ) {}
}

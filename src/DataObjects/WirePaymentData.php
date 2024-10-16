<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class WirePaymentData
{
    public function __construct(
        public string $wireNumber,
        public string $institution,
        public string $routingNumber,
        public string $accountNumber,
        public string $accountOwner
    ) {}
}

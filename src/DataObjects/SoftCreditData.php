<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SoftCreditData extends Data
{
    public function __construct(
        public string $id,
        public string $recipientAccountId,
        public float $amount,
        public string $donationId,
        public string $eventRegistrationId,
        public string $membershipId
    ) {}
}

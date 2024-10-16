<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SoftCreditData
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

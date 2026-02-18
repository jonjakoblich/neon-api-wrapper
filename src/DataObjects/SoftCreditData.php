<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SoftCreditData extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $recipientAccountId = null,
        public ?float $amount = null,
        public ?string $donationId = null,
        public ?string $eventRegistrationId = null,
        public ?string $membershipId = null
    ) {}
}

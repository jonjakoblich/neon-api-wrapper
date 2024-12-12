<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class MembershipResponseData extends Data
{
    public function __construct(
        public string $id,
        #[ArrayOf(SubMembershipResponseData::class)]
        public array $subMembershipResponses,
        public string $accountId,
        public PaymentResponseData $paymentResponse,
        public IdNamePairData $membershipLevel,
        public IdNamePairData $membershipTerm,
        public string $status
    ) {}
}

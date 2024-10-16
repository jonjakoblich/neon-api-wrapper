<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipResponseData
{
    public function __construct(
        public string $id,
        public array $subMembershipResponses,
        public string $accountId,
        public PaymentResponseData $paymentResponse,
        public IdNamePairData $membershipLevel,
        public IdNamePairData $membershipTerm,
        public string $status
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipAutoRenewalData
{
    public function __construct(
        public string $membershipId,
        public bool $autoRenewal,
        public CreditCardOnlinePaymentData $creditCardOnline,
        public ECheckPaymentData $ach,
        public bool $donorCoveredFeeFlag,
        public bool $sendAutoRenewalEnabledEmail
    ) {}
}

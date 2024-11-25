<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MembershipAutoRenewalData extends Data
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

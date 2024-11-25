<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CreditCardOfflinePaymentData extends Data
{
    public function __construct(
        public string $cardNumberLastFour,
        public int $expirationMonth,
        public int $expirationYear,
        public string $cardTypeCode,
        public string $cardHolderName,
        public string $cardHolderEmail,
        public BillingAddressData $billingAddress
    ) {}
}

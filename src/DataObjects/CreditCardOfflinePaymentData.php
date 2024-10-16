<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CreditCardOfflinePaymentData
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

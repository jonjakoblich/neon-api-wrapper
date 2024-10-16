<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class CreditCardOnlinePaymentData
{
    public function __construct(
        public string $token,
        public string $cardNumberLastFour,
        public int $expirationMonth,
        public int $expirationYear,
        public string $cardTypeCode,
        public string $cardHolderName,
        public string $cardHolderEmail,
        public BillingAddressData $billingAddress,
        public string $transactionNumber
    ) {}
}

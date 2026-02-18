<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class CreditCardOnlinePaymentData extends Data
{
    public function __construct(
        public ?string $token = null,
        public ?string $cardNumberLastFour = null,
        public ?int $expirationMonth = null,
        public ?int $expirationYear = null,
        public ?string $cardTypeCode = null,
        public ?string $cardHolderName = null,
        public ?string $cardHolderEmail = null,
        public ?BillingAddressData $billingAddress = null,
        public ?string $transactionNumber = null
    ) {}
}

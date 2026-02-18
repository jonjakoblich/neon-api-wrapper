<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PaymentData extends Data
{
    public function __construct(
        public float $amount,
        public int $tenderType,
        public ?string $id = null,
        public ?string $paymentStatus = null,
        public ?string $note = null,
        public ?string $receivedDate = null,
        public ?CreditCardOnlinePaymentData $creditCardOnline = null,
        public ?CreditCardOfflinePaymentData $creditCardOffline = null,
        public ?ECheckPaymentData $ach = null,
        public ?CheckPaymentData $check = null,
        public ?WirePaymentData $wire = null,
        public ?InKindPaymentData $inKind = null,
        public ?DafPayPaymentData $dafpay = null
    ) {}
}

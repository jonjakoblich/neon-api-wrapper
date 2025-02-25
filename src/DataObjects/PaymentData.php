<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class PaymentData extends Data
{
    public function __construct(
        public float $amount,
        public ?string $id,
        public ?string $paymentStatus,
        public ?string $note,
        public ?int $tenderType,
        public ?string $receivedDate,
        public ?CreditCardOnlinePaymentData $creditCardOnline,
        public ?CreditCardOfflinePaymentData $creditCardOffline,
        public ?ECheckPaymentData $ach,
        public ?CheckPaymentData $check,
        public ?WirePaymentData $wire,
        public ?InKindPaymentData $inKind
    ) {}
}

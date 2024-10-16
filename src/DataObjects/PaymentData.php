<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class PaymentData
{
    public function __construct(
        public string $id,
        public float $amount,
        public string $paymentStatus,
        public string $note,
        public int $tenderType,
        public string $receivedDate,
        public CreditCardOnlinePaymentData $creditCardOnline,
        public CreditCardOfflinePaymentData $creditCardOffline,
        public ECheckPaymentData $ach,
        public CheckPaymentData $check,
        public WirePaymentData $wire,
        public InKindPaymentData $inKind
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class AccountOrderData
{
    public function __construct(
        public string $id,
        public array $items,
        public string $orderDate,
        public string $accountId,
        public float $totalCharge,
        public float $subTotal,
        public float $tax,
        public float $totalDiscount,
        public float $shippingHandlingFee,
        public string $status,
        public TimestampsData $timestamps
    ) {}
}

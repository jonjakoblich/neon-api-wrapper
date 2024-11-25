<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OrderData extends Data
{
    public function __construct(
        public array $donations,
        public string $id,
        public array $eventRegistrations,
        public string $orderDate,
        public string $accountId,
        public array $products,
        public array $memberships,
        public float $totalCharge,
        public bool $needShipping,
        public float $subTotal,
        public OrderShippingData $shipping,
        public float $tax,
        public array $discounts,
        public float $totalDiscount,
        public bool $donorCoveredFeeFlag,
        public float $shippingHandlingFee,
        public float $donorCoveredFee,
        public string $status,
        public bool $payLater,
        public TimestampsData $timestamps,
        public array $payments
    ) {}
}

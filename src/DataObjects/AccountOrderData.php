<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class AccountOrderData extends Data
{
    public function __construct(
        public ?string $id,
        #[ArrayOf(AccountOrderItemData::class)]
        public ?array $items,
        public ?string $orderDate,
        public ?string $accountId,
        public ?float $totalCharge,
        public ?float $subTotal,
        public ?float $tax,
        public ?float $totalDiscount,
        public ?float $shippingHandlingFee,
        public ?string $status,
        public ?TimestampsData $timestamps
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class OrderData extends Data
{
    public function __construct(
        #[ArrayOf(DonationItemData::class)]
        public ?array $donations = [],
        public ?string $id = null,
        #[ArrayOf(EventRegistrationItemData::class)]
        public ?array $eventRegistrations = [],
        public ?string $orderDate = null,
        public ?string $accountId = null,
        #[ArrayOf(ProductItemData::class)]
        public ?array $products = [],
        #[ArrayOf(MembershipItemData::class)]
        public ?array $memberships = [],
        public ?float $totalCharge = null,
        public ?bool $needShipping = null,
        public ?float $subTotal = null,
        public ?OrderShippingData $shipping = null,
        public ?float $tax = null,
        #[ArrayOf(DiscountItemData::class)]
        public ?array $discounts = [],
        public ?float $totalDiscount = null,
        public ?bool $donorCoveredFeeFlag = null,
        public ?float $shippingHandlingFee = null,
        public ?float $donorCoveredFee = null,
        public ?string $status = null,
        public ?bool $payLater = null,
        public ?TimestampsData $timestamps = null,
        #[ArrayOf(PaymentData::class)]
        public ?array $payments = []
    ) {}
}

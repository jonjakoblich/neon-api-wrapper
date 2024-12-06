<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class OrderListResponseData extends Data
{
    public function __construct(
        #[ArrayOf(AccountOrderData::class)]
        public array $orders,
        public PaginationData $pagination
    ) {}
}

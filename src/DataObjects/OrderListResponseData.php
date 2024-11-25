<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OrderListResponseData extends Data
{
    public function __construct(
        public array $orders,
        public PaginationData $pagination
    ) {}
}

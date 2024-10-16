<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class OrderListResponseData
{
    public function __construct(
        public array $orders,
        public PaginationData $pagination
    ) {}
}

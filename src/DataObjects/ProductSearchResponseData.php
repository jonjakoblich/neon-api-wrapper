<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class ProductSearchResponseData extends Data
{
    public function __construct(
        public array $products,
        public PaginationData $pagination
    ) {}
}

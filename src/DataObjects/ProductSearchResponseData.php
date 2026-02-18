<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class ProductSearchResponseData extends Data
{
    public function __construct(
        #[ArrayOf(ProductData::class)]
        public ?array $products = null,
        public ?PaginationData $pagination = null
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class ProductSearchResponseData
{
    public function __construct(
        public array $products,
        public PaginationData $pagination
    ) {}
}

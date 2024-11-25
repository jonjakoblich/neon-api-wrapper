<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SearchResponseData extends Data
{
    public function __construct(
        public PaginationData $pagination,
        public array $searchResults
    ) {}
}

<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SearchRequestData extends Data
{
    public function __construct(
        public array $searchFields,
        public array $outputFields,
        public PaginationData $pagination
    ) {}
}

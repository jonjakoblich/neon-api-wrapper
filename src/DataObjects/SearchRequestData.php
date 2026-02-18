<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class SearchRequestData extends Data
{
    public function __construct(
        #[ArrayOf(SearchCriteriaData::class)]
        public array $searchFields,
        public array $outputFields,
        public PaginationData $pagination
    ) {}
}

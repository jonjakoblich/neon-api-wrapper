<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class OpportunitySearchResultData extends Data
{
    public function __construct(
        public ?PaginationData $pagination = null,
        #[ArrayOf(OpportunityData::class)]
        public ?array $opportunityList = [],
    ) {}
}

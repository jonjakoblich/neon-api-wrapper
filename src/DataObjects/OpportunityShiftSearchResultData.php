<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class OpportunityShiftSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(OpportunityShiftData::class)]
        public ?array $opportunityShiftList = [],
        public ?PaginationData $pagination = null,
    ) {}
}

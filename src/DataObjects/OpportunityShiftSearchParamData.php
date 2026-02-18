<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class OpportunityShiftSearchParamData extends Data
{
    public function __construct(
        public ?int $pageSize = null,
        public ?int $currentPage = null,
        public ?string $occurrenceId = null,
        public ?string $ngOccurrenceId = null,
    ) {}
}

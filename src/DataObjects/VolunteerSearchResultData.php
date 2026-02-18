<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class VolunteerSearchResultData extends Data
{
    public function __construct(
        public ?PaginationData $pagination = null,
        #[ArrayOf(VolunteerData::class)]
        public ?array $volunteerList = [],
    ) {}
}

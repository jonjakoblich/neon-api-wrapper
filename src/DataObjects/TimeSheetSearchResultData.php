<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class TimeSheetSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(TimeSheetData::class)]
        public ?array $timeSheetApiList = [],
        public ?PaginationData $pagination = null,
    ) {}
}

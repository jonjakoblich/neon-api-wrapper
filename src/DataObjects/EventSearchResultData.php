<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class EventSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(EventSearchResultItemData::class)]
        public ?array $events = [],
        public ?PaginationData $pagination = null
    ) {}
}

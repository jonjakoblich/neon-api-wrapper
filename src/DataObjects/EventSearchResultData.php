<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class EventSearchResultData extends Data
{
    public function __construct(
        public array $events,
        public PaginationData $pagination
    ) {}
}

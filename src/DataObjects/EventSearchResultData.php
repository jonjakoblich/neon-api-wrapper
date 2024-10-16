<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class EventSearchResultData
{
    public function __construct(
        public array $events,
        public PaginationData $pagination
    ) {}
}

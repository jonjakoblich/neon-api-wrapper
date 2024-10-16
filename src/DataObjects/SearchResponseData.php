<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SearchResponseData
{
    public function __construct(
        public PaginationData $pagination,
        public array $searchResults
    ) {}
}

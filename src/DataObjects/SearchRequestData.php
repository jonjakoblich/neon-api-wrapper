<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SearchRequestData
{
    public function __construct(
        public array $searchFields,
        public array $outputFields,
        public PaginationData $pagination
    ) {}
}

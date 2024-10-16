<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class SoftCreditSearchResultData
{
    public function __construct(
        public array $softCredits,
        public PaginationData $pagination
    ) {}
}

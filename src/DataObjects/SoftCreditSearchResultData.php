<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class SoftCreditSearchResultData extends Data
{
    public function __construct(
        public array $softCredits,
        public PaginationData $pagination
    ) {}
}

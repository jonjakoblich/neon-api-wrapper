<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class SoftCreditSearchResultData extends Data
{
    public function __construct(
        #[ArrayOf(SoftCreditData::class)]
        public ?array $softCredits = [],
        public ?PaginationData $pagination = null
    ) {}
}

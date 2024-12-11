<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Attributes\ArrayOf;
use TwoJays\NeonApiWrapper\Data;

class MembershipTermsResponseData extends Data
{
    public function __construct(
        #[ArrayOf(MembershipTermData::class)]
        public ?array $membershipTerms,
        public PaginationData $pagination
    ) {}
}

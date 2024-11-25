<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

use TwoJays\NeonApiWrapper\Data;

class MembershipTermsResponseData extends Data
{
    public function __construct(
        public array $membershipTerms,
        public PaginationData $pagination
    ) {}
}

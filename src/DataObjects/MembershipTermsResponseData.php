<?php

namespace TwoJays\NeonApiWrapper\DataObjects;

class MembershipTermsResponseData
{
    public function __construct(
        public array $membershipTerms,
        public PaginationData $pagination
    ) {}
}

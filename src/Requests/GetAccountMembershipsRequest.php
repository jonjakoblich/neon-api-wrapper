<?php

namespace TwoJays\NeonApiWrapper\Requests;

use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\DataObjects\MembershipListResponseData;

class GetAccountMembershipsRequest implements GetRequest
{
    use AccountsEndpoint, HasQueryParams;

    public function __construct(
    ){}

    public function responseDataType(): string
    {
        return MembershipListResponseData::class;
    }

    public function getEndpoint(): string
    {
        return $this::ENDPOINT_BASE . '/{id}/memberships';
    }
}
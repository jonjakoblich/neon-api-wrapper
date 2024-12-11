<?php

namespace TwoJays\NeonApiWrapper\Services\Memberships\Requests;

use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Concerns\MembershipsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;
use TwoJays\NeonApiWrapper\Enums\MembershipLevelStatusEnum;

class GetMembershipLevelsRequest implements GetRequest, WithQueryParams
{
    use MembershipsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public string $status = MembershipLevelStatusEnum::ACTIVE->value,
        public ?int $currentPage = 0,
        public ?int $pageSize = 20,
    ){
        $this->setEndpoint();  
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/levels';
    }
}
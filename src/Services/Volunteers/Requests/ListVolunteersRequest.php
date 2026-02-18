<?php

namespace TwoJays\NeonApiWrapper\Services\Volunteers\Requests;

use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Concerns\VolunteersEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListVolunteersRequest implements GetRequest, WithQueryParams
{
    use VolunteersEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public readonly ?int $pageSize = null,
        public readonly ?int $currentPage = null,
        public readonly ?array $opportunityIds = null,
        public readonly ?array $shiftIds = null,
        public readonly ?array $groupIds = null,
        public readonly ?array $roleIds = null,
    ){
        $this->setEndpoint();
    }
}

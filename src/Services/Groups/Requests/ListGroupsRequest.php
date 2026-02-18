<?php

namespace TwoJays\NeonApiWrapper\Services\Groups\Requests;

use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\GroupsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListGroupsRequest implements GetRequest, WithQueryParams
{
    use GroupsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public readonly ?int $pageSize = null,
        public readonly ?int $currentPage = null,
        public readonly ?string $groupIds = null,
        public readonly ?string $groupName = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/list';
    }
}

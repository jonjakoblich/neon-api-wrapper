<?php

namespace TwoJays\NeonApiWrapper\Services\Shifts\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Concerns\ShiftsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListShiftVolunteersRequest implements GetRequest, WithPathParams, WithQueryParams
{
    use ShiftsEndpoint, ExecutesRequests, HasPathParams, HasQueryParams;

    public function __construct(
        #[PathParam]
        public readonly string $opportunityId,
        #[PathParam]
        public readonly string $id,
        public ?int $pageSize = null,
        public ?int $currentPage = null,
        public ?array $groupIds = null,
        public ?array $roleIds = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{opportunityId}/shifts/{id}/volunteers';
    }
}

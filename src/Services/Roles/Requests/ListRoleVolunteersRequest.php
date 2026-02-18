<?php

namespace TwoJays\NeonApiWrapper\Services\Roles\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Concerns\RolesEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListRoleVolunteersRequest implements GetRequest, WithPathParams, WithQueryParams
{
    use RolesEndpoint, ExecutesRequests, HasPathParams, HasQueryParams;

    public function __construct(
        #[PathParam]
        public readonly string $id,
        public readonly ?int $pageSize = null,
        public readonly ?int $currentPage = null,
        public readonly ?array $opportunityIds = null,
        public readonly ?array $shiftIds = null,
        public readonly ?array $groupIds = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}/volunteers';
    }
}

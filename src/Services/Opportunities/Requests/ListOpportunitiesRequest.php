<?php

namespace TwoJays\NeonApiWrapper\Services\Opportunities\Requests;

use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Concerns\OpportunitiesEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListOpportunitiesRequest implements GetRequest, WithQueryParams
{
    use OpportunitiesEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public readonly ?int $pageSize = null,
        public readonly ?int $currentPage = null,
        public readonly ?string $eventId = null,
        public readonly ?string $ngEventId = null,
    ){
        $this->setEndpoint();
    }
}

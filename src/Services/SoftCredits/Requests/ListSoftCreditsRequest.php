<?php

namespace TwoJays\NeonApiWrapper\Services\SoftCredits\Requests;

use TwoJays\NeonApiWrapper\Concerns\SoftCreditsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListSoftCreditsRequest implements GetRequest, WithQueryParams
{
    use SoftCreditsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?int $currentPage = null,
        public ?int $pageSize = null,
    ){
        $this->setEndpoint();
    }
}

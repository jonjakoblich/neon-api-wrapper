<?php

namespace TwoJays\NeonApiWrapper\Services\RecurringDonations\Requests;

use TwoJays\NeonApiWrapper\Concerns\RecurringDonationsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListRecurringDonationsRequest implements GetRequest, WithQueryParams
{
    use RecurringDonationsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?int $currentPage = null,
        public ?int $pageSize = null,
    ){
        $this->setEndpoint();
    }
}

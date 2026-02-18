<?php

namespace TwoJays\NeonApiWrapper\Services\TimeSheets\Requests;

use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Concerns\TimeSheetsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListTimeSheetsRequest implements GetRequest, WithQueryParams
{
    use TimeSheetsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public readonly ?int $pageSize = null,
        public readonly ?int $currentPage = null,
        public readonly ?string $ids = null,
        public readonly ?string $accountIds = null,
        public readonly ?string $projectIds = null,
        public readonly ?string $volunteerGroups = null,
        public readonly ?string $roleIds = null,
        public readonly ?string $shiftIds = null,
        public readonly ?array $statusList = null,
    ){
        $this->setEndpoint();
    }
}

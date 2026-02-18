<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;
use TwoJays\NeonApiWrapper\Enums\PaginationSortDirectionEnum;

class GetAccountEventRegistrationsRequest implements GetRequest, WithPathParams, WithQueryParams
{
    use AccountsEndpoint, ExecutesRequests, HasPathParams, HasQueryParams;

    public function __construct(
        #[PathParam]
        public readonly string $id,
        public ?int $currentPage = 0,
        public ?string $eventId = null,
        public ?string $sortColumn = 'registrationDateTime',
        public ?string $sortDirection = PaginationSortDirectionEnum::DESC->value,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}/eventRegistrations';
    }
}

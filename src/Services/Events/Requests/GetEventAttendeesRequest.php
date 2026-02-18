<?php

namespace TwoJays\NeonApiWrapper\Services\Events\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\EventsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class GetEventAttendeesRequest implements GetRequest, WithPathParams, WithQueryParams
{
    use EventsEndpoint, ExecutesRequests, HasPathParams, HasQueryParams;

    public function __construct(
        #[PathParam]
        public readonly string $id,
        public ?int $currentPage = 0,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}/attendees';
    }
}

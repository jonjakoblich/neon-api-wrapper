<?php

namespace TwoJays\NeonApiWrapper\Services\Events\Requests;

use TwoJays\NeonApiWrapper\Concerns\EventsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasQueryParams;
use TwoJays\NeonApiWrapper\Contracts\GetRequest;
use TwoJays\NeonApiWrapper\Contracts\WithQueryParams;

class ListEventsRequest implements GetRequest, WithQueryParams
{
    use EventsEndpoint, ExecutesRequests, HasQueryParams;

    public function __construct(
        public ?bool $archived = null,
        public ?int $currentPage = 0,
        public ?string $endDateAfter = null,
        public ?string $endDateBefore = null,
        public ?string $eventCategory = null,
        public ?string $eventId = null,
        public ?string $eventName = null,
        public ?int $pageSize = 20,
        public ?bool $publishedEvent = null,
        public ?string $startDateAfter = null,
        public ?string $startDateBefore = null,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE;
    }
}

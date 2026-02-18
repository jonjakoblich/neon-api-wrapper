<?php

namespace TwoJays\NeonApiWrapper\Services\Events\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Concerns\EventsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;

class DeleteEventRequest implements DeleteRequest, WithPathParams
{
    use EventsEndpoint, ExecutesRequests, HasPathParams;

    public function __construct(
        #[PathParam]
        public readonly string $id,
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}';
    }
}

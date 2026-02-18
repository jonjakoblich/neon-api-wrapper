<?php

namespace TwoJays\NeonApiWrapper\Services\Groups\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\GroupsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerAccountIdsData;

class RemoveGroupVolunteersRequest implements DeleteRequest, WithPathParams, WithRequestBodyParam
{
    use GroupsEndpoint, ExecutesRequests, HasPathParams, HasRequestBodyParam;

    public function __construct(
        #[PathParam]
        public string $id,
        #[RequestBodyParam]
        public VolunteerAccountIdsData $volunteers
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{id}/removeVolunteers';
    }
}

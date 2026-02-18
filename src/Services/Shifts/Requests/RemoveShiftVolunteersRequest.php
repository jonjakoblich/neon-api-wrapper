<?php

namespace TwoJays\NeonApiWrapper\Services\Shifts\Requests;

use TwoJays\NeonApiWrapper\Attributes\PathParam;
use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasPathParams;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ShiftsEndpoint;
use TwoJays\NeonApiWrapper\Contracts\DeleteRequest;
use TwoJays\NeonApiWrapper\Contracts\WithPathParams;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerAccountIdsData;

class RemoveShiftVolunteersRequest implements DeleteRequest, WithPathParams, WithRequestBodyParam
{
    use ShiftsEndpoint, ExecutesRequests, HasPathParams, HasRequestBodyParam;

    public function __construct(
        #[PathParam]
        public string $opportunityId,
        #[PathParam]
        public string $id,
        #[RequestBodyParam]
        public VolunteerAccountIdsData $accountIds
    ){
        $this->setEndpoint();
    }

    public function setEndpoint(): void
    {
        $this->endpoint = $this::ENDPOINT_BASE . '/{opportunityId}/shifts/{id}/removeVolunteers';
    }
}

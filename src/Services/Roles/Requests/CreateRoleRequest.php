<?php

namespace TwoJays\NeonApiWrapper\Services\Roles\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\RolesEndpoint;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\VolunteerRoleData;

class CreateRoleRequest implements PostRequest, WithRequestBodyParam
{
    use RolesEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public VolunteerRoleData $role,
    ){
        $this->setEndpoint();
    }
}

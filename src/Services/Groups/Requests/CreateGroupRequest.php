<?php

namespace TwoJays\NeonApiWrapper\Services\Groups\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\GroupsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\UserGroupData;

class CreateGroupRequest implements PostRequest, WithRequestBodyParam
{
    use GroupsEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public UserGroupData $group,
    ){
        $this->setEndpoint();
    }
}

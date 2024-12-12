<?php

namespace TwoJays\NeonApiWrapper\Services\Accounts\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\AccountsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\AccountData;

class CreateAccountRequest implements PostRequest, WithRequestBodyParam
{
    use AccountsEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public AccountData $apiAccount,
    ){
        $this->setEndpoint();   
    }
}
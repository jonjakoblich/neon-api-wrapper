<?php

namespace TwoJays\NeonApiWrapper\Services\SoftCredits\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\SoftCreditsEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\SoftCreditData;

class CreateSoftCreditRequest implements PostRequest, WithRequestBodyParam
{
    use SoftCreditsEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public SoftCreditData $softCredit,
    ){
        $this->setEndpoint();
    }
}

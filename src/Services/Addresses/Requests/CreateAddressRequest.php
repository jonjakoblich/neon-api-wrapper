<?php

namespace TwoJays\NeonApiWrapper\Services\Addresses\Requests;

use TwoJays\NeonApiWrapper\Attributes\RequestBodyParam;
use TwoJays\NeonApiWrapper\Concerns\AddressesEndpoint;
use TwoJays\NeonApiWrapper\Concerns\ExecutesRequests;
use TwoJays\NeonApiWrapper\Concerns\HasRequestBodyParam;
use TwoJays\NeonApiWrapper\Contracts\PostRequest;
use TwoJays\NeonApiWrapper\Contracts\WithRequestBodyParam;
use TwoJays\NeonApiWrapper\DataObjects\AddressAddData;

class CreateAddressRequest implements PostRequest, WithRequestBodyParam
{
    use AddressesEndpoint, ExecutesRequests, HasRequestBodyParam;

    public function __construct(
        #[RequestBodyParam]
        public readonly AddressAddData $addressAdd,
    ){
        $this->setEndpoint();
    }
}